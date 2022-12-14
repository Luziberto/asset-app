<?php

namespace App\Services\CoinGecko;

use App\Constants\CoinBaseConstants;
use App\Constants\CoingeckoConstants;
use App\Constants\CurrencyConstants;
use App\Exceptions\CoinGeckoHttpException;
use App\Http\Libraries\CoinGecko\Asset\GetAssetHistoryRequest;
use App\Http\Libraries\CoinGecko\Asset\GetAssetSimplePriceRequest;
use App\Http\Libraries\CoinGecko\Asset\GetAssetsListRequest;
use App\Http\Libraries\CoinGecko\Asset\GetAssetsMarketRequest;
use App\Http\Libraries\CoinGecko\Asset\GetSpecificAssetsRequest;
use App\Repositories\Asset\AssetRepositoryInterface;
use Illuminate\Support\Facades\Log;

class CoinService implements CoinServiceInterface
{
    public function __construct(AssetRepositoryInterface $assetRepository)
    {
        $this->assetRepository = $assetRepository;
    }

    public function getSimplePrice(array $externalIds)
    {
        $params = [
            'ids' => implode(',', $externalIds), 
            'vs_currencies' => CurrencyConstants::BRL.','.CurrencyConstants::USD,
            'include_24hr_change' => 'true'
        ];

        $response = GetAssetSimplePriceRequest::get($params);
        
        if($response->isFailure()) {
            $this->handleError($response, CoingeckoConstants::COIN_GECKO_SERVICE_GET_ENDPOINT_TO_GET_SIMPLE_PRICE);
        }

        $data = [];
        
        foreach ($response->data as $id => $value) {
            $data[] = [
                'external_id' => $id,
                'price_usd'                   => $value[CurrencyConstants::USD],
                'price_brl'                   => $value[CurrencyConstants::BRL],
                'coin_base'                   => CoinBaseConstants::COIN_GECKO,
                'price_change_percentage_24h' => $value['brl_24h_change']
            ];
        }

        return $data;
    }

    public function getList()
    {
        $response = GetAssetsListRequest::get();

        if($response->isFailure()) {
            $this->handleError($response, CoingeckoConstants::COIN_GECKO_SERVICE_GET_ENDPOINT_TO_LIST_ASSETS);
        }
        
        return $response->data;
    }

    public function getAssetsMarketList(array $externalIds)
    {
        $body = [
            'vs_currency' => CurrencyConstants::BRL,
            'ids' => implode(',', $externalIds),
            'per_page' => CoingeckoConstants::MARKET_LIST_PER_PAGE
        ];

        $response = GetAssetsMarketRequest::get($body);

        if($response->isFailure()) {
            $this->handleError($response, CoingeckoConstants::COIN_GECKO_SERVICE_GET_ENDPOINT_TO_GET_ASSETS_MARKET);
        }
        
        return $response->data;
    }
    
    public function getAssets($id)
    {
        $response = GetSpecificAssetsRequest::get($id)->data;

        if($response->isFailure()) {
            $this->handleError($response, CoingeckoConstants::COIN_GECKO_SERVICE_GET_ENDPOINT_TO_GET_ASSETS);
        }
    }

    public function getAssetHistory($id, $date)
    {
        $response = GetAssetHistoryRequest::get($id, ['date' => $date]);
        
        if($response->isFailure()) {
            $this->handleError($response, CoingeckoConstants::COIN_GECKO_SERVICE_GET_ENDPOINT_TO_GET_ASSET_HISTORY);
        }

        return $response->data;
    }

    private function handleError($response, $coinGeckoErrorOrigin)
    {
        $errorCode = $response->data['message']['codeAsString'] ?? null;
        $errorMessage = CoingeckoConstants::getErrorMessage($errorCode);

        Log::error("[$coinGeckoErrorOrigin] - " . json_encode($errorMessage));
        throw new CoinGeckoHttpException($errorMessage);
    }
}
