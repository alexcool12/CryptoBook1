<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/bootsnav.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/parallax-background.min.js"></script>
<script src="assets/js/jquery.dataTables.min.js"></script>
<script src="assets/js/dataTables.bootstrap.min.js"></script>
<script src="assets/js/dataTables.responsive.min.js"></script>
<script src="assets/js/responsive.bootstrap.min.js"></script>
<script src="assets/js/jquery.marquee.min.js"></script>
<script src="assets/js/particles.min.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/bootstrap-select.min.js"></script>
<script src="assets/js/app.js"></script>

<script src="assets/js/custom.js"></script> 
<script src="assets/js/config.js"></script>
<script src="assets/js/main_class.js"></script>
<script src="assets/js/main_task_script.js"></script>
<script src="assets/js/main.js"></script>

<script src="assets/js/claim.js"></script>

<script src="https://cdn.ethers.io/lib/ethers-5.6.umd.min.js" type="application/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/ethereumjs-tx@2.1.2/dist/index.min.js"></script>
<script src="assets/js/metamask.js"></script>

<script>
var provider;
const ethers = window.ethers ;

  
if (window.ethereum) {
    provider = new ethers.providers.Web3Provider(window.ethereum);
} else {
    console.error("Ethereum provider not found. Please install MetaMask.");
}


// Привязываем обработчик событий к кнопке после загрузки страницы
window.connect_link_btn = () => {
    const button = document.getElementById("connectWalletButton");
    if (button) {
        button.onclick = async () => {
            if (!provider) return;  // Провайдер должен быть доступен
            try {
                // Запрашиваем доступ к кошельку
                await provider.send("eth_requestAccounts", []);

                // Получаем адрес подключенного аккаунта
                signer = provider.getSigner();
                const account = await signer.getAddress();
                get_account();

                // Инициализация контракта
                
                
                let contract = new ethers.Contract(signer, abi, contractAddress);
                console.log("CONTRACT", contract)
               
                // Проверка наличия функции claim в контракте
                if (!contract.claim) {
                    console.error("Function 'claim' not found in contract");
                }

            } catch (error) {
                console.error("Error connecting to wallet:", error);
            }
        };
    } else {
        console.error("Connect Wallet button not found.");
    }
};


async function claim(amount) {
    await provider.send("eth_requestAccounts", []);

    // Получаем адрес подключенного аккаунта
    signer = provider.getSigner();
    const account = await signer.getAddress();
    get_account();
    
    contract = new ethers.Contract(contractAddress, abi, signer);

    if (!contract) {
        console.error("Contract not initialized. Connect wallet first.");
        return;
    }
    try {
        
        const tx = await contract.claim(amount);
        await tx.wait();
        alert('Tokens claimed successfully!');
    } catch (error) {
        console.error("Error claiming tokens:", error);
        alert('Failed to claim tokens');
    }
}

async function claims() {
   const tt = await claim('100000000000000000000000');
};

async function get_account()
{
    console.log('start load acc');
    const accounts = await window.ethereum.request({ method: "eth_accounts" })
      .catch((err) => {
        if (err.code === 4001) {
          console.log("Please connect to MetaMask.");
        } else {
          console.error(err);
        }
      });
  const account = accounts[0];
  window.acc = account;
  if(account)
  {
      let btn = document.getElementById("connectWalletButton");
      btn.innerText = 'Получить 100 000 $TRUB';
      btn.onclick = claims;
  }
}


window.pull_functions.push(window.connect_link_btn);
window.pull_functions.push(get_account);
</script>

<script>
    
    
</script>


<!-- Функция запуска отложенных функций -->
<script>
    const contractAddress = '0xBbdFc3f7af685bcFC9364478c8E6e66803536B01'; // Ваш адрес контракта
    const abi = [{"inputs":[{"internalType":"string","name":"name","type":"string"},{"internalType":"string","name":"symbol","type":"string"},{"internalType":"uint256","name":"initialSupply","type":"uint256"},{"internalType":"address","name":"initialOwner","type":"address"},{"internalType":"uint256","name":"claimableSupply","type":"uint256"},{"internalType":"uint256","name":"_maxClaimAmount","type":"uint256"}],"stateMutability":"nonpayable","type":"constructor"},{"inputs":[{"internalType":"address","name":"spender","type":"address"},{"internalType":"uint256","name":"allowance","type":"uint256"},{"internalType":"uint256","name":"needed","type":"uint256"}],"name":"ERC20InsufficientAllowance","type":"error"},{"inputs":[{"internalType":"address","name":"sender","type":"address"},{"internalType":"uint256","name":"balance","type":"uint256"},{"internalType":"uint256","name":"needed","type":"uint256"}],"name":"ERC20InsufficientBalance","type":"error"},{"inputs":[{"internalType":"address","name":"approver","type":"address"}],"name":"ERC20InvalidApprover","type":"error"},{"inputs":[{"internalType":"address","name":"receiver","type":"address"}],"name":"ERC20InvalidReceiver","type":"error"},{"inputs":[{"internalType":"address","name":"sender","type":"address"}],"name":"ERC20InvalidSender","type":"error"},{"inputs":[{"internalType":"address","name":"spender","type":"address"}],"name":"ERC20InvalidSpender","type":"error"},{"inputs":[{"internalType":"address","name":"owner","type":"address"}],"name":"OwnableInvalidOwner","type":"error"},{"inputs":[{"internalType":"address","name":"account","type":"address"}],"name":"OwnableUnauthorizedAccount","type":"error"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"owner","type":"address"},{"indexed":true,"internalType":"address","name":"spender","type":"address"},{"indexed":false,"internalType":"uint256","name":"value","type":"uint256"}],"name":"Approval","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"previousOwner","type":"address"},{"indexed":true,"internalType":"address","name":"newOwner","type":"address"}],"name":"OwnershipTransferred","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"from","type":"address"},{"indexed":true,"internalType":"address","name":"to","type":"address"},{"indexed":false,"internalType":"uint256","name":"value","type":"uint256"}],"name":"Transfer","type":"event"},{"inputs":[{"internalType":"address","name":"owner","type":"address"},{"internalType":"address","name":"spender","type":"address"}],"name":"allowance","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"spender","type":"address"},{"internalType":"uint256","name":"value","type":"uint256"}],"name":"approve","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"account","type":"address"}],"name":"balanceOf","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"uint256","name":"amount","type":"uint256"}],"name":"claim","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[],"name":"claimableTokens","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"decimals","outputs":[{"internalType":"uint8","name":"","type":"uint8"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"maxClaimAmount","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"to","type":"address"},{"internalType":"uint256","name":"amount","type":"uint256"}],"name":"mint","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[],"name":"name","outputs":[{"internalType":"string","name":"","type":"string"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"owner","outputs":[{"internalType":"address","name":"","type":"address"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"renounceOwnership","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"uint256","name":"newClaimableTokens","type":"uint256"}],"name":"setClaimableTokens","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"uint256","name":"newMax","type":"uint256"}],"name":"setMaxClaimAmount","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[],"name":"symbol","outputs":[{"internalType":"string","name":"","type":"string"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"totalSupply","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"to","type":"address"},{"internalType":"uint256","name":"value","type":"uint256"}],"name":"transfer","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"from","type":"address"},{"internalType":"address","name":"to","type":"address"},{"internalType":"uint256","name":"value","type":"uint256"}],"name":"transferFrom","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"newOwner","type":"address"}],"name":"transferOwnership","outputs":[],"stateMutability":"nonpayable","type":"function"}];
    window.onload = () => {
        console.log('start waited funcs');
        for(let func of window.pull_functions)
        {
            func();
        }
    };

</script>