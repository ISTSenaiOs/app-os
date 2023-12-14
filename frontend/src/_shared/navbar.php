<div class="bg-gray-50">
  <nav class="container mx-auto px-4 py-4 flex justify-between items-center">
    <a class="" href="#">
      <img src="../assets/images/logo-senai.png" alt="" class="w-64">
    </a>
    <div class="lg:hidden">
      <button class="navbar-burger flex items-center text-blue-600 p-3">
        <svg class="block h-4 w-4 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
          <title>Mobile menu</title>
          <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
        </svg>
      </button>
    </div>
    <ul class="sm-hidden ml-auto flex items-center w-auto space-x-6">
      <li><a class="text-sm text-gray-400 hover:text-gray-500" href="#">Cadastro geral</a></li>
      <li><a class="text-sm text-blue-600 font-bold" href="#">Oportunidades abertas</a></li>
      <li><a class="text-sm text-gray-400 hover:text-gray-500" href="#">Oportunidades ganhas</a></li>
      <li><a class="text-sm text-gray-400 hover:text-gray-500" href="#">Empresas excluídas</a></li>
    </ul>
    <a class="hidden lg:inline-block lg:ml-auto lg:mr-3 py-2 px-6 bg-gray-50 hover:bg-gray-100 text-sm text-gray-900 font-bold  rounded-xl transition duration-200" href="#">Sign In</a>
    <a class="hidden lg:inline-block py-2 px-6 bg-blue-500 hover:bg-blue-600 text-sm text-white font-bold rounded-xl transition duration-200" href="#">Sign up</a>
  </nav>
  <div class="navbar-menu relative z-50 hidden">
    <div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"></div>
    <nav class="fixed top-0 left-0 bottom-0 flex flex-col w-5/6 max-w-sm py-6 px-6 bg-white border-r overflow-y-auto">
      <div class="flex items-center mb-8">
        <a class="" href="#">
          <img src="../assets/images/logo-senai.png" alt="" class="w-64">
        </a>
        <button class="navbar-close">
          <svg class="h-6 w-6 text-gray-400 cursor-pointer hover:text-gray-500 ml-10" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
          </svg>
        </button>
      </div>
      <div>
        <ul>
          <li class="mb-1">
            <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" href="#">Cadastro geral</a>
          </li>
          <li class="mb-1">
            <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" href="#">Oportunidades abertas</a>
          </li>
          <li class="mb-1">
            <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" href="#">Oportunidades ganhas</a>
          </li>
          <li class="mb-1">
            <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" href="#">Empresas excluídas</a>
          </li>
        </ul>
      </div>
      <div class="mt-auto">
        <div class="pt-6">
          <a class="block px-4 py-3 mb-3 text-xs text-center font-semibold leading-none bg-blue-400 hover:bg-blue-300 rounded-xl" href="#">Entrar</a>
          <a class="block px-4 py-3 mb-3 text-xs text-center font-semibold leading-none bg-blue-300 hover:bg-blue-200 rounded-xl" href="#">Cadastar</a>
        </div>
        <p class="my-4 text-xs text-center text-gray-400">
          <span>Copyright © 2024 | SENAI Osasco</span>
        </p>
      </div>
    </nav>
  </div>
</div>

<script>
  // Burger menus
  document.addEventListener('DOMContentLoaded', function() {
    // open
    const burger = document.querySelectorAll('.navbar-burger');
    const menu = document.querySelectorAll('.navbar-menu');

    if (burger.length && menu.length) {
      for (var i = 0; i < burger.length; i++) {
        burger[i].addEventListener('click', function() {
          for (var j = 0; j < menu.length; j++) {
            menu[j].classList.toggle('hidden');
          }
        });
      }
    }

    // close
    const close = document.querySelectorAll('.navbar-close');
    const backdrop = document.querySelectorAll('.navbar-backdrop');

    if (close.length) {
      for (var i = 0; i < close.length; i++) {
        close[i].addEventListener('click', function() {
          for (var j = 0; j < menu.length; j++) {
            menu[j].classList.toggle('hidden');
          }
        });
      }
    }

    if (backdrop.length) {
      for (var i = 0; i < backdrop.length; i++) {
        backdrop[i].addEventListener('click', function() {
          for (var j = 0; j < menu.length; j++) {
            menu[j].classList.toggle('hidden');
          }
        });
      }
    }
  });
</script>