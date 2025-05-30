import './bootstrap';

// side bar menu action
const sidebar = document.getElementById('sidebar'),
      sidebarCloseIcon = document.getElementById('sidebar-close-icon'),
      sidebarOpenIcon = document.getElementById('sidebar-open-icon'),
      navbar = document.getElementById('navbar')
      overlay = document.getElementById('overlay');

function openSidebar() {
  sidebar.classList.add( 'block' )
  sidebar.classList.remove('hidden')
  navbar.classList.add('hidden')
  navbar.classList.remove('block')
}

function closeSidebar() {
    sidebar.classList.add( 'hidden' )
    sidebar.classList.remove('block')
    navbar.classList.add('block')
    navbar.classList.remove('hidden')
}

sidebarOpenIcon.addEventListener('click' , () => openSidebar() );
overlay.addEventListener('click' , () => closeSidebar());
window.addEventListener('resize',() => closeSidebar())


const loginButton = document.querySelectorAll('.login');
  const closeLoginButton = document.getElementById('closelogin');
  const closeRegisterButton = document.getElementById('closeregister');
  const loginForm = document.getElementById('loginform');
  const signupForm = document.getElementById('signupform');
  const signupButton = document.getElementById('signup-btn');
  
  function openLoginForm() {
    loginForm.classList.add('flex');
    loginForm.classList.remove('hidden');
  }
  
  function closeLoginForm() {
    loginForm.classList.add('hidden');
    loginForm.classList.remove('flex');
  }
  
  function openSignupForm() {
    signupForm.classList.add('flex');
    signupForm.classList.remove('hidden');
  }
  
  function closeSignupForm() {
    signupForm.classList.add('hidden');
    signupForm.classList.remove('flex');
  }
  
  loginButton.forEach(button => {
    button.addEventListener('click', () => openLoginForm());
  });
  closeLoginButton.addEventListener('click', () => closeLoginForm());
  closeRegisterButton.addEventListener('click', () => closeSignupForm());
  signupButton.addEventListener('click', () => {
    event.preventDefault(); 
    closeLoginForm();
    openSignupForm();
  });

// cvbc


document.addEventListener('DOMContentLoaded', function() {
    const toast = document.getElementById('toast');
    if (toast) {
      setTimeout(function() {
        toast.remove();  
      }, 2500); 
    }
  });



  const sessionsButton = document.getElementById('sessionsbutton');
  sessionsForm = document.getElementById('sessionsform');
  closeSessions = document.getElementById('closesessions');

function sessionsOpen (){
sessionsForm.classList.add('flex');
sessionsForm.classList.remove('hidden');
}

function sessionsClose() {
sessionsForm.classList.add('hidden');
sessionsForm.classList.remove('flex');
}

sessionsButton.addEventListener('click',() => sessionsOpen ());
closeSessions.addEventListener('click',() => sessionsClose ());


// sdfs


document.getElementById('ticket-form').addEventListener('submit', function (e) {
    e.preventDefault();
  
    const formData = new FormData(this);
  
    fetch('buy-ticket.php', {
      method: 'POST',
      body: formData
    })
      .then(res => res.json())
      .then(data => {
        const result = document.getElementById('result');
        result.textContent = data.message;
        result.className = data.success ? 'text-green-600' : 'text-red-600';
      });
  });
  
  