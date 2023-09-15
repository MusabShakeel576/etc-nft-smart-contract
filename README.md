# ETC NFT Smart Contract

Smart Contract and Metadata with NFT Image Number Generation for ETC (lingouni) NFT.

## Getting Started

[![Open in GitHub Codespaces](https://github.com/codespaces/badge.svg)](https://codespaces.new/MusabShakeel576/etc-nft-smart-contract?quickstart=1)

1. Copy `.env.example` file into a new `.env` file
    ```shell
    cp .env.example .env
    ```
1. Update `.env` variables
1. Deploy smart contract, replace `<Type>` with either `Value`, `Gold`, or `Platinum`
    ```shell
    npx hardhat run scripts/deploy<Type>.ts --network blockchain
    ```
1. Verify smart contract on explorer, replace `<address>` with the smart contract address displayed after running recent deploy command
    ```shell
    npx hardhat verify --network blockchain <address>
    ```
