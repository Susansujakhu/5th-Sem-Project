

// window.onclick = function(event) {
// var a = document.getElementById("myForm");
// console.log(event.target);
//   if (event.target == a) {
//   	console.log(event.target);
//     a.style.display="none";
//   }

// }

function openForm() {
	var x = document.getElementById("myForm");
	if (x.style.display === "block") {
		x.style.display = "none";
	}
	else{
		x.style.display = "block";
	}
}

function closeForm() {
	document.getElementById("myForm").style.display = "none";
}



// var prevScrollpos = window.pageYOffset;
// window.onscroll = function() {
// var currentScrollPos = window.pageYOffset;
//   if (prevScrollpos > currentScrollPos) {
//     document.getElementById("topbar").style.top = "0";
//   } else {
//     document.getElementById("topbar").style.top = "-50px";
//   }
//   prevScrollpos = currentScrollPos;
// }

window.onscroll = function() {
	scrollWin();
};


function scrollWin() {
    //window.scrollTo(500, 0);

//alert('window.pageXOffset= '+window.pageXOffset + '\nwindow.pageYOffset='+ window.pageYOffset);
var head = document.getElementsByTagName('HEAD')[0];  

        // Create new link Element 
        var link = document.createElement('link'); 
        
        // set the attributes for link element  
        link.rel = 'stylesheet';  
        
        link.type = 'text/css'; 
        
        link.href = 'style.css';  
        
        // Append link element to HTML head 
        head.appendChild(link);  

        var login= document.getElementById('login');
        var register= document.getElementById('register');
        var welcome= document.getElementById('welcome');
        var btn= document.getElementById('btn');
        var topbar= document.getElementById('top_bar');
        var toggle= document.getElementById('toggle_area');
        
        var currentScrollPos = window.pageYOffset;

        if(window.pageYOffset > 50){   
        	//header.style.cssText = "background-color: var(--primary); transition:300ms linear;"
        	
        	topbar.style.cssText = "background-color:white; transition:300ms linear; top : -20px;";
            btn.style.cssText = "color:black;";
            login.style.cssText = "color:black;";
            register.style.cssText = "color:black;";
            toggle.style.cssText = "color:black;";
            for (var i = 1; i <= 5; i++) {
                var id_name = 'menu_btn';
                document.getElementById(id_name.concat(i)).style.cssText = "color:black";
            }
        }
        if(window.pageYOffset <= 50){   
        	//header.style.backgroundColor='transparent';
        	//navbar.style.cssText = "background-color:transparent;"
            btn.style.cssText = "color:white;"
            topbar.style.cssText = "background-color:transparent; transition:300ms linear;top : 0px;"
        	//document.getElementById("top_bar").style.top = "0px";
            btn.style.cssText = "color:white;";
            login.style.cssText = "color:white;";
            register.style.cssText = "color:white;";
            toggle.style.cssText = "color:white;"
            for (var i = 1; i <= 4; i++) {
                var id_name = 'menu_btn';
                document.getElementById(id_name.concat(i)).style.cssText = "color:white";
            }
        }
    }




    function call(){
    	var email=document.getElementById('email').value;
    	var check = /^(?:[a-z0-9!#$%&amp;'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&amp;'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])$/;
    	if(!check.test(email)){
    		document.getElementById("error").innerHTML="**Invalid Email**";
    		return false;

    	} 
    }


    function topFunction() {
    	document.body.scrollTop = 0;
    	document.documentElement.scrollTop = 0;
    }




    function order_btn(){
        document.getElementById('cart_section').style.cssText = "display:none;";
        document.getElementById('edit_info_section').style.cssText = "display:none;";
        document.getElementById('change_password_section').style.cssText = "display:none;";
        document.getElementById('order_section').style.cssText = "display:block;";

        document.getElementById('my_order').classList.add('active');
        document.getElementById('my_cart').classList.remove('active');
        document.getElementById('edit_info').classList.remove('active');
        document.getElementById('change_password').classList.remove('active');
    }

    function edit_btn(){
        document.getElementById('cart_section').style.cssText = "display:none;";
        document.getElementById('edit_info_section').style.cssText = "display:block;";
        document.getElementById('change_password_section').style.cssText = "display:none;";
        document.getElementById('order_section').style.cssText = "display:none;";
        
        document.getElementById('my_order').classList.remove('active');
        document.getElementById('my_cart').classList.remove('active');
        document.getElementById('edit_info').classList.add('active');
        document.getElementById('change_password').classList.remove('active');
    }

    function cart_btn(){
        document.getElementById('cart_section').style.cssText = "display:block;";
        document.getElementById('edit_info_section').style.cssText = "display:none;";
        document.getElementById('change_password_section').style.cssText = "display:none;";
        document.getElementById('order_section').style.cssText = "display:none;";
        
        document.getElementById('my_order').classList.remove('active');
        document.getElementById('my_cart').classList.add('active');
        document.getElementById('edit_info').classList.remove('active');
        document.getElementById('change_password').classList.remove('active');
    }

    function change_btn(){
        document.getElementById('cart_section').style.cssText = "display:none;";
        document.getElementById('edit_info_section').style.cssText = "display:none;";
        document.getElementById('change_password_section').style.cssText = "display:block;";
        document.getElementById('order_section').style.cssText = "display:none;";
        
        document.getElementById('my_order').classList.remove('active');
        document.getElementById('my_cart').classList.remove('active');
        document.getElementById('edit_info').classList.remove('active');
        document.getElementById('change_password').classList.add('active');
    }