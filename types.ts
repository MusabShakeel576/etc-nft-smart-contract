import { config as dotEnvConfig } from "dotenv";

dotEnvConfig();

export const PRIVATE_KEY = process.env.PRIVATE_KEY || ""
export const BLOCKCHAIN_RPC_URL = process.env.BLOCKCHAIN_RPC_URL || ""
export const EXPLORER_API_KEY = process.env.EXPLORER_API_KEY || ""