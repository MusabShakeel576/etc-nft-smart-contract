import { ethers } from "hardhat";

async function main() {
  const etc = await ethers.deployContract("ETCGold");

  await etc.waitForDeployment();

  console.log(`ETCGold smart contract deployed to ${etc.target}`);
}

// We recommend this pattern to be able to use async/await everywhere
// and properly handle errors.
main().catch((error) => {
  console.error(error);
  process.exitCode = 1;
});
