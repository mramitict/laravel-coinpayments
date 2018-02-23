<?php

namespace Kevupton\LaravelCoinpayments;

abstract class CoinpaymentsCommands {
    const CREATE_TRANSACTION = 'create_transaction';
    const CREATE_WITHDRAWAL = 'create_withdrawal';
    const CREATE_TRANSFER = 'create_transfer';
    const GET_TX_INFO = 'get_tx_info';
    const GET_CALLBACK_ADDRESS = 'get_callback_address';
    const BALANCES = 'balances';
    const RATES = 'rates';
    const GET_BASIC_INFO = 'get_basic_info';
    const GET_DEPOSIT_ADDRESS = 'get_deposit_address';
    const GET_TRANSACTION_INFO = 'get_tx_info_multi';
    const GET_TRANSACTION_LIST = 'get_tx_ids';
    const CONVERT = 'convert';
    const GET_WITHDRAWL_HISTORY = 'get_withdrawal_history';
    const GET_CONVERSION_INFO = 'get_conversion_info';
}
