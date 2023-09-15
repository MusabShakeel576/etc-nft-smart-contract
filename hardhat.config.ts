import { HardhatUserConfig } from "hardhat/config";
import "@nomicfoundation/hardhat-toolbox";
import { BLOCKCHAIN_RPC_URL, EXPLORER_API_KEY, PRIVATE_KEY } from "./types";

const config: HardhatUserConfig = {
  networks: {
    blockchain: {
      url: BLOCKCHAIN_RPC_URL,
      accounts: [PRIVATE_KEY]
    }
  },
  etherscan: {
    apiKey: EXPLORER_API_KEY
  },
  solidity: {
    version: "0.8.19",
    settings: {
      optimizer: {
        enabled: true,
        runs: 200
      }
    }
  },
};

export default config;
