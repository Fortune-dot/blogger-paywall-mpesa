<!DOCTYPE html>
<html data-theme="dracula">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top 10 Best Tips</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://unpkg.com/intasend-inlinejs-sdk@3.0.4/build/intasend-inline.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.0.1/dist/full.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<script src="https://cdn.tailwindcss.com"></script>
</head>
<body style="padding:10px;">
<div class="mockup-browser border bg-base-300">
  <div class="mockup-browser-toolbar">
    <div class="input">https://coffee&bugs.com</div>
  </div>
  <div class="featured-image-container">
                <!-- Featured Image -->
                <img class="featured-image" src="./images/js.jpg" alt="Featured Image Description">
            </div>  <div class="flex justify-center px-4 py-16 bg-base-200">
 
      <div class="container mx-auto my-8">
        <div class="max-w-2xl mx-auto">
            <!-- Blog Post Title -->
            <h1 class="text-3xl font-bold mb-4">Unveiling the Magic: Top 10 Fun JavaScript Facts</h1>

            <!-- Blog Post Metadata (Author, Date, etc.) -->
            <div class="mb-4 text-gray-600" style="color:#FEAD42!important;">
                <span>Published on November 13, 2023 by Fortune Dev</span>
            </div>

            <!-- Blog Post Content -->
            <div class="prose">
               
                <p>JavaScript, the dynamic and versatile programming language, has become an integral part of web development. Its widespread use in building interactive and responsive websites has made it a favorite among developers. Beyond its functionality, JavaScript boasts some intriguing and fun facts that add a layer of fascination to its coding landscape. In this blog post, we'll delve into the top 10 fun JavaScript facts that showcase the language's uniqueness.</p>
                
            </div>
            <br>
            <h1 class="text-2xl font-bold mb-4">1.Born in 10 Days:</h1>
           
            <div class="prose">
               
                <p>JavaScript was created in just 10 days by Brendan Eich in 1995 while he was working at Netscape Communications Corporation. Despite its rapid development, JavaScript has grown to become one of the most influential languages on the web..</p>
           
            </div>
            <h1 class="text-2xl font-bold mb-4">2.Not the Same as Java:</h1>
           
           <div class="prose">
              
               <p>JavaScript was created in just 10 days by Brendan Eich in 1995 while he was working at Netscape Communications Corporation. Despite its rapid development, JavaScript has grown to become one of the most influential languages on the web..</p>
          
           </div>
           <h1 class="text-2xl font-bold mb-4">3.First-Class Functions:</h1>
           
           <div class="prose">
              
               <p>JavaScript was created in just 10 days by Brendan Eich in 1995 while he was working at Netscape Communications Corporation. Despite its rapid development, JavaScript has grown to become one of the most influential languages on the web..</p>
          
           </div>
           <h1 class="text-2xl font-bold mb-4">4.The DOM Dance:</h1>
           
           <div class="prose">
              
               <p>JavaScript was created in just 10 days by Brendan Eich in 1995 while he was working at Netscape Communications Corporation. Despite its rapid development, JavaScript has grown to become one of the most influential languages on the web..</p>
          
           </div>
           <h1 class="text-2xl font-bold mb-4">5.Async Awesomeness:</h1>
           
           <div class="prose">
              
               <p>JavaScript was created in just 10 days by Brendan Eich in 1995 while he was working at Netscape Communications Corporation. Despite its rapid development, JavaScript has grown to become one of the most influential languages on the web..</p>
          
           </div>
           <h1 class="text-2xl font-bold mb-4">6.NaN is a Number:</h1>
           
           <div class="prose">
              
               <p>JavaScript was created in just 10 days by Brendan Eich in 1995 while he was working at Netscape Communications Corporation. Despite its rapid development, JavaScript has grown to become one of the most influential languages on the web..</p>
          
           </div>
           <h1 class="text-2xl font-bold mb-4">7.Truthy and Falsy:</h1>
           
           <div class="prose">
              
               <p>JavaScript was created in just 10 days by Brendan Eich in 1995 while he was working at Netscape Communications Corporation. Despite its rapid development, JavaScript has grown to become one of the most influential languages on the web..</p>
          
           </div>
           <h1 class="text-2xl font-bold mb-4">6.Hoisting Magic:</h1>
           
           <div class="prose">
              
               <p>JavaScript was created in just 10 days by Brendan Eich in 1995 while he was working at Netscape Communications Corporation. Despite its rapid development, JavaScript has grown to become one of the most influential languages on the web..</p>
          
           </div>
        </div>
    </div>
<!---paywall-->
<div id="backdrop" class="fixed inset-0 bg-black opacity-50 hidden"></div>

<div id="popup" class="fixed inset-0 flex items-center justify-center z-50 hidden">
  <div class="bg-white border-2 border-gray-300 p-10 rounded shadow-lg text-center w-full max-w-2xl mx-auto">
    <i class="fas fa-lock fa-5x mb-4"></i>
    <h2 class="text-3xl mb-4 text-black">Locked Content 🔒</h2>
    <p class="text-black">You must Pay KSH 20 to continue Reading</p>
    <div>
      <button style="color: white; background-color:green; padding:10px; border-radius:8px;"  id="payButton">Pay with M-Pesa</button>
    </div>
  </div>
</div>
</div>



</div>
</div>
<script>
function getCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for(var i=0;i < ca.length;i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1,c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
    }
    return null;
}


var checkStatusInterval = setInterval(function() {
    checkTransactionStatus('random');
}, 10000); // Check every 10 seconds

function initializePayment() {
    var account_no = 'random';
    var url = "https://tinypesa.com/api/v1/express/initialize";
    fetch(url, {
        body: "amount=5&msisdn=0791281811&account_no=" + account_no,
        headers: {
            Apikey: "UX0bRhL3c20",
            "Content-Type": "application/x-www-form-urlencoded",
        },
        method: "POST",
    })
    .then(response => {
        if (!response.ok) {
            throw new Error('Network response was not ok');
        }
        return response.json();
    })
    .then(data => {
        console.log('Payment initialization:', data);
        if (data.success === 'true') {
            console.log('Payment Initaited')
        } else {
            console.error('Failed to initialize payment:', data);
        }
    })
    .catch(error => console.error('Error:', error));
}

function checkTransactionStatus(account_no) {
    console.log('Checking transaction status for account:', account_no);
    fetch('/check_status.php?external_reference=' + account_no)
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(data => {
            console.log('Transaction status:', data);
            if (data.status === 'success') {
                document.cookie = 'paid=true';
                location.reload();
                clearInterval(checkStatusInterval);
            } else if (data.status === 'failed') {
                console.error('Transaction failed:', data);
                clearInterval(checkStatusInterval);
            }
        })
        .catch(error => console.error('Error:', error));
}





if (getCookie('paid') !== 'true') {


    window.addEventListener('scroll', function() {
        var scrollPosition = window.pageYOffset;
        var pageHeight = document.body.offsetHeight - window.innerHeight;

        if (scrollPosition > pageHeight / 3) {
            document.getElementById('popup').classList.remove('hidden');
            document.getElementById('backdrop').classList.remove('hidden');
            document.body.classList.add('overflow-hidden');
        }
    });
}else{
   //stop the interval
    clearInterval(checkStatusInterval);
}

document.getElementById('payButton').addEventListener('click', function() {
    initializePayment();
});           
</script>
</body>
</html>