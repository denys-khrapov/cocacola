jQuery(document).ready(function ($) {

  $('#fullpage').fullpage({
    scrollingSpeed: 600,
  });

  checkAndDestroyFullPage();
  window.addEventListener('resize', checkAndDestroyFullPage);

  function checkAndDestroyFullPage() {
    if (window.innerWidth < 1280) {
      if (typeof fullpage_api !== 'undefined') {
        fullpage_api.destroy('all');
      }
    }
  }

  $('.js-example-basic-single').select2({
    minimumResultsForSearch: Infinity
  });

  $(".wpcf7-form select option:first").prop('disabled', true);
});


document.addEventListener("DOMContentLoaded", function () {
  initMobileMenu();
  initTabs();
  initArtImg();

  function initTabs() {
    const tabItems = document.querySelectorAll('.tabs-nav .nav-item');
    const tabContents = document.querySelectorAll('.tabs-content .tab-item');

    tabItems.forEach((tab, index) => {
      tab.setAttribute('data-index', index + 1);
    });

    tabContents.forEach((content, index) => {
      content.setAttribute('data-index', index + 1);
      content.style.display = 'none';
    });

    function showTabContent(index) {

      tabContents.forEach(function (content) {
        content.style.display = 'none';
        content.classList.remove('show');
      });

      const selectedContent = document.querySelector(`.tabs-content .tab-item[data-index="${index}"]`);
      if (selectedContent) {
        selectedContent.style.display = 'flex';
        selectedContent.classList.add('show');
      }

      tabItems.forEach(tab => {
        tab.classList.remove('active');
      });

      const selectedTab = document.querySelector(`.tabs-nav .nav-item[data-index="${index}"]`);
      if (selectedTab) {
        selectedTab.classList.add('active');
      }
    }

    showTabContent(1);

    tabItems.forEach(function (tab) {
      tab.addEventListener('click', function () {
        const index = tab.getAttribute('data-index');
        showTabContent(index);
      });
    });
  }
  function initArtImg() {
    const sections = document.querySelectorAll('.section');
    const artEl = document.querySelector('.art-el');
    sections.forEach((section, index) => {
      section.dataset.index = index;
    });

    function updateArtEl(index) {
      if (index === 0) {
        artEl.classList.remove('active', 'hide');
      } else if (index === 1) {
        artEl.classList.add('active');
        artEl.classList.remove('hide');
      } else if (index > 1) {
        artEl.classList.remove('active');
        artEl.classList.add('hide');
      }
    }

    sections.forEach((section) => {
      const observer = new MutationObserver(() => {
        if (section.classList.contains('active')) {
          const index = parseInt(section.dataset.index, 10);
          updateArtEl(index);
        }
      });

      observer.observe(section, { attributes: true });
    });
  }
  function initMobileMenu() {
    const menuBurger = document.querySelector('.menu-burger');
    const menu = document.querySelector('#header-navigation');

    menuBurger.addEventListener('click', function () {
      this.classList.toggle('active');
      menu.classList.toggle('active');
    });

  }

});