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


// const loginButton = document.querySelectorAll('.login');
//   const closeLoginButton = document.getElementById('closelogin');
//   const closeRegisterButton = document.getElementById('closeregister');
//   const loginForm = document.getElementById('loginform');
//   const signupForm = document.getElementById('signupform');
//   const signupButton = document.getElementById('signup-btn');
  
//   function openLoginForm() {
//     loginForm.classList.add('flex');
//     loginForm.classList.remove('hidden');
//   }
  
//   function closeLoginForm() {
//     loginForm.classList.add('hidden');
//     loginForm.classList.remove('flex');
//   }
  
//   function openSignupForm() {
//     signupForm.classList.add('flex');
//     signupForm.classList.remove('hidden');
//   }
  
//   function closeSignupForm() {
//     signupForm.classList.add('hidden');
//     signupForm.classList.remove('flex');
//   }
  
//   loginButton.forEach(button => {
//     button.addEventListener('click', () => openLoginForm());
//   });
//   closeLoginButton.addEventListener('click', () => closeLoginForm());
//   closeRegisterButton.addEventListener('click', () => closeSignupForm());
//   signupButton.addEventListener('click', () => {
//     event.preventDefault(); 
//     closeLoginForm();
//     openSignupForm();
//   });

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
  
  // buy ticket
  // const dateButtonsContainer = document.getElementById('date-buttons');
  // const daysOfWeek = ["یک‌شنبه", "دوشنبه", "سه‌شنبه", "چهارشنبه", "پنج‌شنبه", "جمعه", "شنبه"];
  // const months = ["فروردین", "اردیبهشت", "خرداد", "تیر", "مرداد", "شهریور", "مهر", "آبان", "آذر", "دی", "بهمن", "اسفند"];

  // // افزودن دکمه‌های تاریخ
  // document.addEventListener('DOMContentLoaded', function () {
  //   const dateButtonsContainer = document.getElementById('date-buttons');
  //   if (!dateButtonsContainer) return;
  
  //   const daysOfWeek = ["یک‌شنبه", "دوشنبه", "سه‌شنبه", "چهارشنبه", "پنج‌شنبه", "جمعه", "شنبه"];
  //   const months = ["فروردین", "اردیبهشت", "خرداد", "تیر", "مرداد", "شهریور", "مهر", "آبان", "آذر", "دی", "بهمن", "اسفند"];
  
  //   for (let i = 0; i < 3; i++) {
  //     const date = new Date();
  //     date.setDate(date.getDate() + i);
  
  //     const weekday = daysOfWeek[date.getDay()];
  //     const day = date.getDate();
  //     const month = months[date.getMonth()];
  
  //     const button = document.createElement('button');
  //     button.type = "button";
  //     button.className = "flex-1 p-3 border rounded-xl text-center text-gray-700 hover:bg-blue-100 transition";
  //     button.innerHTML = `
  //       <div class="font-semibold">${weekday}</div>
  //       <div class="text-lg font-bold">${day}</div>
  //       <div class="text-sm text-gray-500">${month}</div>
  //     `;
  //     button.dataset.date = date.toISOString().split('T')[0];
  
  //     button.addEventListener("click", () => {
  //       document.querySelectorAll("#date-buttons button").forEach(btn => {
  //         btn.classList.remove("bg-blue-600", "text-white");
  //       });
  //       button.classList.add("bg-blue-600", "text-white");
  //       console.log("تاریخ انتخاب‌شده:", button.dataset.date);
  //     });
  
  //     dateButtonsContainer.appendChild(button);
  //   }
  // });
  

  