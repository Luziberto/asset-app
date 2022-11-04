<?php

namespace App\Constants;

class CoingeckoConstants
{
    const COIN_GECKO_SERVICE_GET_ENDPOINT_TO_GET_ASSETS = 'CoinGeckoService#getEndpointToGetAssets';
    const COIN_GECKO_SERVICE_GET_ENDPOINT_TO_LIST_ASSETS = 'CoinGeckoService#getEndpointToListAssets';
    const COIN_GECKO_SERVICE_GET_ENDPOINT_TO_GET_SIMPLE_PRICE = 'CoinGeckoService#getEndpointToGetSimplePrice';
    const COIN_GECKO_SERVICE_GET_ENDPOINT_TO_GET_ASSET_HISTORY = 'CoinGeckoService#getEndpointToGetAssetHistory';
    const COIN_GECKO_SERVICE_GET_ENDPOINT_TO_GET_ASSETS_MARKET = 'CoinGeckoService#getEndpointToGetAssetsMarket';

    const DEFAULT_ERROR_MESSAGE = 'Something unexpected happened. If the problem persists, contact support.';

    static function getErrorMessage($errorCode)
    {
        return self::DEFAULT_ERROR_MESSAGE;
    }

    const MARKET_LIST_PER_PAGE = 200;

    const ASSETS_COIN_GECKO_ID = [
        '0x',
        '1inch',
        'aave',
        'alchemix-usd',
        'aleph-zero',
        'algorand',
        'amp-token',
        'ankr',
        'apecoin',
        'apenft',
        'aptos',
        'arweave',
        'audius',
        'avalanche-2',
        'axie-infinity',
        'baby-doge-coin',
        'balancer',
        'basic-attention-token',
        'binancecoin',
        'binance-usd',
        'bitcoin',
        'bitcoin-cash',
        'bitcoin-cash-sv',
        'bitcoin-gold',
        'bitdao',
        'bitrise-token',
        'bittorrent',
        'blockstack',
        'bone-shibaswap',
        'btse-token',
        'cardano',
        'casper-network',
        'cdai',
        'celo',
        'celsius-degree-token',
        'chain-2',
        'chainlink',
        'chia',
        'chiliz',
        'coinex-token',
        'coinmetro',
        'compound-ether',
        'compound-governance-token',
        'compound-usd-coin',
        'compound-usdt',
        'constellation-labs',
        'convex-crv',
        'convex-finance',
        'cosmos',
        'crypto-com-chain',
        'curve-dao-token',
        'dai',
        'dash',
        'decentraland',
        'decred',
        'defichain',
        'dogecoin',
        'dogelon-mars',
        'dydx',
        'ecash',
        'ecomi',
        'elrond-erd-2',
        'energy-web-token',
        'enjincoin',
        'eos',
        'escoin-token',
        'ethereum',
        'ethereum-classic',
        'ethereum-name-service',
        'ethereum-pow-iou',
        'evmos',
        'fantom',
        'filecoin',
        'flow',
        'frax',
        'frax-share',
        'ftx-token',
        'gala',
        'gatechain-token',
        'gemini-dollar',
        'gmx',
        'gnosis',
        'golem',
        'harmony',
        'havven',
        'hedera-hashgraph',
        'helium',
        'hive',
        'holotoken',
        'huobi-btc',
        'huobi-token',
        'icon',
        'injective-protocol',
        'internet-computer',
        'iostoken',
        'iota',
        'iotex',
        'juno-network',
        'just',
        'kadena',
        'kava',
        'klay-token',
        'kucoin-shares',
        'kusama',
        'leo-token',
        'lido-dao',
        'link',
        'liquity-usd',
        'litecoin',
        'livepeer',
        'loopring',
        'magic-internet-money',
        'maiar-dex',
        'maker',
        'mask-network',
        'matic-network',
        'merit-circle',
        'mina-protocol',
        'monero',
        'moonbeam',
        'msol',
        'near',
        'nem',
        'neo',
        'nexo',
        'nucypher',
        'nxm',
        'oasis-network',
        'oec-token',
        'okb',
        'olympus',
        'omisego',
        'ontology',
        'optimism',
        'osmosis',
        'pancakeswap-token',
        'pax-gold',
        'paxos-standard',
        'polkadot',
        'polymath',
        'qtum',
        'quant-network',
        'radix',
        'ravencoin',
        'render-token',
        'reserve-rights-token',
        'ribbon-finance',
        'ripple',
        'rocket-pool',
        'rocket-pool-eth',
        'safemoon',
        'safemoon-2',
        'secret',
        'serum',
        'shiba-inu',
        'siacoin',
        'skale',
        'solana',
        'staked-ether',
        'stellar',
        'stepn',
        'sushi',
        'swipe',
        'swissborg',
        'synapse-2',
        'tenset',
        'terra-luna',
        'terra-luna-2',
        'terrausd',
        'tether',
        'tether-eurt',
        'tether-gold',
        'tezos',
        'the-graph',
        'the-open-network',
        'the-sandbox',
        'theta-fuel',
        'theta-token',
        'thorchain',
        'tokenize-xchange',
        'tron',
        'true-usd',
        'trust-wallet-token',
        'uniswap',
        'usd-coin',
        'usdd',
        'vechain',
        'vvs-finance',
        'waves',
        'wax',
        'whitebit',
        'woo-network',
        'wrapped-bitcoin',
        'xdce-crowd-sale',
        'yearn-finance',
        'zcash',
        'zelcash',
        'zencash',
        'zilliqa'
    ];

}
