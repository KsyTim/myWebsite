'use strict'

const debounce = (func, time = 100) => {
  let timer;
  return function (e) {
    clearTimeout(timer);
    timer = setTimeout(func, time, e);
  }
}

class website {
  constructor (element) {
    this.document = element;
    this.menuMobile = this.document.querySelector('.menu-mobile');
    this.lines = this.document.querySelectorAll('.menu-mobile-item');
    this.experience = this.document.querySelectorAll('.experience-slide');
    this.experienceModalOverlay = this.document.querySelector('.modal-experience .overlay');
    this.subContentSlide = this.document.querySelectorAll('.sub-content-slide');
    this.contentSlide = this.document.querySelectorAll('.content-slide');
    this.projectsContainer = this.document.querySelector('.projects-container');
    this.slider = this.projectsContainer.querySelector('.slider');
    this.descriptions = this.document.querySelectorAll('.projects-content-description');
    this.currentSlide = 0;
    this.size = this.slider.childElementCount;
    this.currentSlideWasChanged = false;
    this.elements = this.slider.querySelectorAll('.slide');
    this.menu = this.document.getElementById('top-arrow');
    this.result = this.document.querySelector('.header');
    this.welcome = this.document.getElementById('about');
    this.toTopArrow = this.document.getElementById('totop');
    this.moving = false;
    this.input = this.document.querySelectorAll('input');
    this.textarea = this.document.querySelector('textarea');
    this.name = this.document.getElementById('name');
    this.email = this.document.getElementById('email');
    this.message = this.document.getElementById('message');
    this.langItem = this.document.querySelectorAll('.lang-item');
    this.mobileMenuBehaviour = this.mobileMenuBehaviour.bind(this);
    this.removeActiveExperienceClasses = this.removeActiveExperienceClasses.bind(this);
    this.overlayVisible = this.overlayVisible.bind(this);
    this.overlayHidden = this.overlayHidden.bind(this);
    this.setEvents = this.setEvents.bind(this);
    this.removeActiveClass = this.removeActiveClass.bind(this);
    this.openSlide = this.openSlide.bind(this);
    this.switchSlide = this.switchSlide.bind(this);
    this.setParameters = this.setParameters.bind(this);
    this.doSlideAbsolutePosition = this.doSlideAbsolutePosition.bind(this);
    this.doSlideTransparent = this.doSlideTransparent.bind(this);
    this.forwardSlide = this.forwardSlide.bind(this);
    this.backSlide = this.backSlide.bind(this);
    this.resizeGallery = this.resizeGallery.bind(this);
    this.startDrag = this.startDrag.bind(this);
    this.stopDrag = this.stopDrag.bind(this);
    this.dragging = this.dragging.bind(this);
    this.clickDots = this.clickDots.bind(this);
    this.changeActiveDotClass = this.changeActiveDotClass.bind(this);
    this.changeCurrentSlide = this.changeCurrentSlide.bind(this);
    this.autoplay = this.autoplay.bind(this);
    this.autoplayStop = this.autoplayStop.bind(this);
    this.changeDescription = this.changeDescription.bind(this);
    this.hugeScreen = this.hugeScreen.bind(this);
    this.smallScreen = this.smallScreen.bind(this);
    this.smoothScrollToSection = this.smoothScrollToSection.bind(this);
    this.scrollMenu = this.scrollMenu.bind(this);
    this.arrowToTop = this.arrowToTop.bind(this);
    this.scrollToTopHugeSmallScreen = this.scrollToTopHugeSmallScreen.bind(this);
    this.animateArrowTopScrolling = this.animateArrowTopScrolling.bind(this);
    this.sending = this.sending.bind(this);
    this.sendMail = this.sendMail.bind(this);
    this.touchesStart = this.touchesStart.bind(this);
    this.touchesMove = this.touchesMove.bind(this);
    this.init = this.init.bind(this);
    this.setLanguage = this.setLanguage.bind(this);
    this.setLanguageActiveClass = this. setLanguageActiveClass.bind(this);
    this.x1 = null;
    this.y1 = null;
  }
  init() {
    this.setLanguageActiveClass();
    this.switchSlide();
    this.resizeGallery(); 
    // this.autoplay();
    this.setEvents();
  }
  // mobile menu button open & close
  mobileMenuBehaviour() {
    this.menuMobile.classList.toggle('visible');
    this.lines.forEach((elem, index) => {
      elem.classList.toggle('close');
      if(index === 0) {
        elem.classList.toggle('close_1st');
      } else if (index === 1) {
        elem.classList.toggle('close_2nd');
      } else if (index === 2) {
        elem.classList.toggle('close_3rd');
      }
    });
  }
  // remove experience active slide  
  removeActiveExperienceClasses() {
    this.experience.forEach(elem => {
      elem.classList.remove('experience-active');
    })
  }
  // experience & achievements modal visible
  overlayVisible() {
    this.experienceModalOverlay.style.cssText = `
      opacity: 1;
      visibility: visible
    `;
  }
  // experience & achievements modal hidden
  overlayHidden() {
    this.experienceModalOverlay.style.cssText = `
      opacity: 0;
      visibility: hidden
    `;
  }
  // experience & achievements modal remove all slides' active class
  removeActiveClass() {
    this.subContentSlide.forEach(elem => {
      elem.classList.remove('sub-active');
    });
  }
  // open current click slide
  openSlide() {
    this.contentSlide.forEach(elem => {
      this.subContentSlide.forEach(item => {
        if (item.classList && item.classList[1] === 'sub-active') {
          elem.classList.remove('content-active');
          if (elem.getAttribute('alt') === item.getAttribute('data-info')) {
            elem.classList.add('content-active');
          }
        }    
      })
    })  
  }
  // switch slide after one of all allowed slides click 
  switchSlide() {
    this.openSlide();
    this.contentSlide.forEach(elem => {
      this.subContentSlide.forEach(item => {
          item.addEventListener('click', () => {
            this.removeActiveClass();
            item.classList.add('sub-active');
            elem.classList.remove('content-active');
            this.openSlide();
          });
      })
    })    
  }
  // set slider layout parameters
  setParameters() {
    this.containerWidth = this.document.querySelector('.wrapper').getBoundingClientRect().width;
    this.containerHeight = 0;
    this.elements.forEach(elem => {
      this.containerHeight += elem.getBoundingClientRect().height;
    })
    this.slider.style.cssText = 
      `
        width: ${this.containerWidth - 100}px;
        height: ${this.containerWidth * 0.45}px;
      `;
    this.doSlideAbsolutePosition();
    let hasArrows = this.projectsContainer.querySelector('.projects-arrows'),
      hasDots = this.projectsContainer.querySelector('.projects-dots');
    if (hasArrows && hasDots) {
      return;
    } else {
      this.slider.insertAdjacentHTML('beforeend', `
        <div class="projects-arrows">
          <button class="projects-arrow-left"></button>
          <button class="projects-arrow-right"></button>
        </div>
      `);
      this.projectsContainer.insertAdjacentHTML('beforeend', `
        <div class="projects-dots"></div>
      `);
      this.dots = this.projectsContainer.querySelector(`.projects-dots`);
      for (let i = 0; i < this.size; i++) {
        this.dots.insertAdjacentHTML('beforeend', `<button class="projects-dot ${i === this.currentSlide ? 'projects-dot-active' : ''}"></button>`)
      } 
      this.dot = this.dots.querySelectorAll(`.projects-dot`);
      this.arrowLeft = this.projectsContainer.querySelector(`.projects-arrow-left`);
      this.arrowRight = this.projectsContainer.querySelector(`.projects-arrow-right`);
      this.changeActiveDotClass();
    }
  }
  // do all slides transparent
  doSlideTransparent() {
    this.elements.forEach(elem => {
      elem.classList.add('transparent');
    });   
  }
  // do all slides absolute position
  doSlideAbsolutePosition() {
    this.elements.forEach(elem => {
      elem.style.position = 'absolute';  
    });
  }
  // back to previous slide
  backSlide() {
    this.doSlideTransparent();
    if (this.currentSlideWasChanged) {
      this.currentSlide--;
    } else {
      this.currentSlide = 0;
    }
    if (this.currentSlide < this.size && this.currentSlide >= 0) {
      this.elements[this.currentSlide].classList.remove('transparent');
      this.currentSlideWasChanged = true;
    } else if (this.currentSlide < 0) {
      this.currentSlide = this.size - 1;
      this.elements[this.currentSlide].classList.remove('transparent');
      this.currentSlideWasChanged = true;
    } 
    this.changeActiveDotClass();
    this.changeDescription();
  }
  // follow next slide
  forwardSlide() {
    this.doSlideTransparent();
    if (this.currentSlideWasChanged) {
      this.currentSlide++;
    } else {
      this.currentSlide = 0;
    }
    if (this.currentSlide < this.size) {
      this.elements[this.currentSlide].classList.remove('transparent');
      this.currentSlideWasChanged = true;
    } else if (this.currentSlide >= this.size) {
      this.currentSlide = 0;
      this.elements[this.currentSlide].classList.remove('transparent');
      this.currentSlideWasChanged = true;
    } 
    this.changeActiveDotClass();
    this.changeDescription();
  }
  // window resize event function
  resizeGallery() {
    if (this.document.querySelector('body').getBoundingClientRect().width < 1200) {
      this.setParameters();
      this.smallScreen();
    } else if (this.document.querySelector('body').getBoundingClientRect().width >= 1200) {
      this.setParameters();
      this.hugeScreen();
    }
  }
  // touch slider swipe start event
  startDrag(position) {
    this.clickX = position.pageX;
    this.slider.classList.add('draggable');
    window.addEventListener('pointermove', this.dragging);
  }
  // touch slider swipe stop event
  stopDrag() {
    window.removeEventListener('pointermove', this.dragging);
    this.slider.classList.remove('draggable'); 
  }
  // move slide after swipe (calculate drag position)
  dragging(position) {
    this.dragX = position.pageX;
    const dragShift = this.dragX - this.clickX;
    // if (this.clickX > document.querySelector('.slider').getBoundingClientRect().width/2) {
    //   this.forwardSlide();
    // } else { 
    //   this.backSlide();
    // }
    if (dragShift > 20 && dragShift > 0) {
      this.backSlide();
    }
    if (dragShift < -20 && dragShift < 0) {
      this.forwardSlide();
    }
  }
  // switch slides using pagination dots 
  clickDots(e) {
    e.preventDefault();
    const dot = e.target.closest('button'); 
    if (!dot) {
      return;
    }
    let dotNumber;
    for (let i = 0; i < this.dot.length; i++) {
      if (this.dot[i] === dot) {
        dotNumber = i;
        break;
      }
    }
    if (dotNumber === this.currentSlide) {
      return;
    }
    this.currentSlide = dotNumber;
    this.changeActiveDotClass();
    this.changeCurrentSlide();
    if (this.document.documentElement.offsetWidth < 570) {
      this.autoplay();
    } 
  }
  // change active dot class after switching (click dot)
  changeActiveDotClass() {
    for (let i = 0; i < this.dot.length; i++) {
      this.dot[i].classList.remove('projects-dot-active');
    }
    this.dot[this.currentSlide].classList.add('projects-dot-active');
    this.changeDescription();
  }
  // do current slide active (visible)
  changeCurrentSlide() {
    this.doSlideTransparent();
    this.elements[this.currentSlide].classList.remove('transparent');
  }
  // autoplay slider
  autoplay(time = 2000) {
    // console.log('play');
    this.interval = setInterval(this.forwardSlide, time);
  }
  // stop autoplay slider
  autoplayStop() {
    // console.log('stop');
    clearInterval(this.interval);
	}
  // stop/start autoplay slider after hover/unfocused
  // pointAndRemove(elem) {
  //   elem.addEventListener('mouseover', this.autoplayStop);
  //   elem.addEventListener('mouseout', ()=> {
  //     this.autoplay();
  //   });
  // }
  // do current slide description visible
  changeDescription() {
    if (this.projectsContainer.querySelector('.descriptions')) {
      this.descriptions.forEach(elem => {
        elem.classList.add('descriptions-hidden');
      })
      this.descriptions[this.currentSlide].classList.remove('descriptions-hidden');
    }
  }
  // set slider html&css parameters after window resize(for huge screens)
  hugeScreen() {
    this.arrowLeft.classList.remove('projects-arrow-left-small');
    this.arrowRight.classList.remove('projects-arrow-right-small');
    this.descriptions.forEach(elem => {
      elem.classList.remove('descriptions-hidden');
    });
    this.descriptions.forEach(elem => {
      elem.classList.remove('descriptions-adaptive');
      elem.style.width = '60%';
      elem.querySelectorAll('.projects-content-text').forEach(item => {
        item.style.margin = '5% 0 10%';
      })
    })
    if (this.projectsContainer.querySelector('.descriptions')) {
      this.descriptions.forEach(elem => {
        elem.classList.add('descriptions-hidden');
      })
      if (this.currentSlide >= 0 && this.currentSlideWasChanged) {
        this.descriptions[this.currentSlide].classList.remove('descriptions-hidden');
        this.descriptions.forEach(elem => {
          elem.classList.add('projects-content-description-small');
        })
      } else if (this.currentSlide === 0 && this.currentSlideWasChanged === false) {
        this.descriptions[this.descriptions.length - 1].classList.remove('descriptions-hidden');
      }   
    }
  }
  // set slider html&css parameters after window resize(for small screens)
  smallScreen() {
    // this.document.querySelectorAll('.projects-content-description').forEach(elem => {
    //   // elem.remove();
    //   elem.classList.add('descriptions-hidden');
    // });
    this.slider.style.cssText = 
    `
      width: ${this.containerWidth}px;
      height: ${this.containerWidth * 0.55}px;
    `;
    this.arrowLeft.classList.add('projects-arrow-left-small');
    this.arrowRight.classList.add('projects-arrow-right-small');
    let descriptionsSection = this.document.createElement('div'); 
    descriptionsSection.classList.add('descriptions');
    if (!this.projectsContainer.querySelector('.descriptions')) {
      this.projectsContainer.appendChild(descriptionsSection);
    }
    this.descriptions.forEach(elem => {
      this.document.querySelector('.descriptions').insertAdjacentElement('beforeend', elem);
      elem.classList.add('descriptions-adaptive');
      elem.style.width = '100%';
      elem.querySelectorAll('.projects-content-text').forEach(item => {
        item.style.margin = '3% 0 5%';
      })
    })
    if (this.projectsContainer.querySelector('.descriptions')) {
      this.descriptions.forEach(elem => {
        elem.classList.add('descriptions-hidden');
      })
      if (this.currentSlide >= 0 && this.currentSlideWasChanged) {
        this.descriptions[this.currentSlide].classList.remove('descriptions-hidden');
        this.descriptions.forEach(elem => {
          elem.classList.remove('projects-content-description-small');
        })
      } else if (this.currentSlide === 0 && this.currentSlideWasChanged === false) {
        this.descriptions[this.descriptions.length - 1].classList.remove('descriptions-hidden');
      }    
    }
  }
  // smooth scroll to section after click header navbar&header mobile menu
  smoothScrollToSection(event) {
    const id = event.target.getAttribute('href').substr(1),
      // элемент с id
      scrollTo = this.document.getElementById(id),
      // значение до верхней границы элемента, по которому происходит клик
      elemPosition = scrollTo.getBoundingClientRect().top;
    // плавная прокуратка на необходимое количество px до элемента
    window.scrollBy({
      top: elemPosition,
      behavior: 'smooth'
    });
  }
  // fixed menu after scrolling down the page
  scrollMenu() {
    if (this.document.documentElement.offsetWidth <= 740) {
      // если высота до элемента меньше либо равна 0 (то есть мы проскролили до элемента и ниже него), то фиксирум меню
      if (this.menu.getBoundingClientRect().top < 0) {
        this.menu.classList.add('menu-fixed');
        this.menu.insertAdjacentHTML('beforeend', '<div class="experience-extra-bg menu-fixed-bg"></div>');
      } 
      if (this.document.getElementById('about').getBoundingClientRect().top === 0) {
        this.menu.classList.remove('menu-fixed');
        this.document.querySelector('.menu-fixed-bg').remove();
      }
    } else {
      if (this.document.querySelector('.menu-fixed-bg')) {
        this.document.querySelector('.menu-fixed-bg').remove();
      }
      this.menu.classList.remove('menu-fixed');
    }
  }
  // arrow to top smooth behaviour
  arrowToTop(elem) {
    // элемент с id
    const scrollTo = this.document.getElementById(elem),
      // значение до ссылки элемента, по которому происходит клик
      elemPosition = scrollTo.getBoundingClientRect().top;
    // плавная прокуратка на необходимое количество px до элемента
    setTimeout(()=> {
      window.scrollBy({
        top: elemPosition,
        behavior: 'smooth'
      });
    }, 1000);
  }
  // display arrow to top
  displayArrowToTop = (elem) => {
    // если высота до элемента меньше 0 (то есть мы проскролили ниже элемента), то появляется стрелка вверх
    if (elem.getBoundingClientRect().top < 0) {
      this.toTopArrow.style.display = 'block';
    } 
    // если высота до элемента больше 0 (то есть мы доскролили до элемента или выше него), то стрелка вверх пропадает
    if (elem.getBoundingClientRect().top >= 0) {
      this.toTopArrow.style.display = 'none';
    }
  };
  // determinate element to scroll top depending on screen size
  scrollToTopHugeSmallScreen () {
    if (this.document.documentElement.offsetWidth <= 740) {
      this.displayArrowToTop(this.welcome);
    } else {
      this.displayArrowToTop(this.result);
    }
  }
  // animate arrow to top
  animateArrowTopScrolling() {
    if ( this.moving === false ) {
      this.moving = true;
      this.toTopArrow.classList.add("active");
      setTimeout(() => {
        this.toTopArrow.classList.remove("active");
        this.moving = false;
      }, 1000);
    }
  }
  // after sending mail
  sending = (resp) => {
    this.input.forEach(item => {
      item.value = '';
    });
    this.textarea.value = '';
    this.statusMessage.style.backgroundColor = 'rgba(37, 32, 47, 0.85)';
    this.statusMessage.innerHTML = `${resp}`;
    setTimeout(()=> {
      this.statusMessage.style.backgroundColor = 'transparent';
      this.statusMessage.innerHTML = '';
      this.statusMessage.remove();
    }, 3000);
  }
  // send email using fetch API
  sendMail = (event) => {
    const data = JSON.stringify({name: this.name.value, email: this.email.value, message: this.message.value}),
      statusMessage = this.document.createElement('div');
    statusMessage.classList.add('status-message');
    if (event.target.tagName.toLowerCase() === 'form') {
      event.target.insertAdjacentElement('beforeend', statusMessage);
      const animationLoading = `
        <div class="status-dots">
          <div class="status-dot status-dot-first"></div>
          <div class="status-dot status-dot-second"></div>
        </div>
      `;
      statusMessage.insertAdjacentHTML('beforeend', animationLoading);
      this.statusMessage = this.document.querySelector('.status-message');
      fetch('./sendMail.php', {
        method: 'POST',
        body: data
      }).then((response) => {
        if (!response.ok) {
          throw new Error('status network is not 200');
        }
        const enResponse = `Thank you!<br>I will contact you as soon as possible!`,
          ruResponse = `Благодарю Вас!<br>Я свяжусь с Вами в ближайшее время!`;
        if (window.location.search.substr(6) === 'ru') {
          this.sending(ruResponse);
        } else {
          this.sending(enResponse);
        }
      }).catch(error => {
        console.error(error);
      })
    }
  }  
  // touch start on mobile devices 
  touchesStart(event) {
    const firstTouch = event.touches[0];
    this.x1 = firstTouch.clientX;
    this.y1 = firstTouch.clientY;
  }
  // touch move on mobile devices
  touchesMove(event) {
    if(!this.x1 || !this.y1) {
      return false;
    }
    this.x2 = event.touches[0].clientX;
    this.y2 = event.touches[0].clientY;
    let xDiff = this.x2 - this.x1,
      yDiff = this.y2 - this.y1;
    if(Math.abs(xDiff) > Math.abs(yDiff)) {
      // r - l
      if(xDiff > 0) {
        this.backSlide();
      } else {
        this.forwardSlide();
      }
    } 
    // else {
    //   if (yDiff > 0) {
    //     console.log('down');
    //   } else {
    //     console.log('top');
    //   }
    // } 
    this.x1 = null;
    this.y1 = null;
  }
  // set language after click and reload page
  setLanguage(event) {
    location.href = `${window.location.pathname}?lang=${event.target.closest('a').getAttribute('data-lang')}`;
  }
  // set active class for click language element
  setLanguageActiveClass() {
    let value = window.location.search ? window.location.search.match(/\=(\w)+/g)[0].substr(1) : 'en';
    this.langItem.forEach(elem => elem.classList.remove('active'));
    this.document.querySelector(`[data-lang=${value}]`).classList.add('active');
  }
  // event handler (+using click event delegation)
  setEvents() {
    // click events
    this.document.addEventListener('click', (event) => {
      const target = event.target;
      //  mobile menu button
      if (target.matches('.menu-mobile-btn') || target.matches('.menu-mobile-container') || target.matches('.menu-mobile-item')) {
        this.mobileMenuBehaviour();
      // achievements & experience button/text 
      } else if (target.matches('.experience-header-achievements-button') || target.matches('#experience-header-achievements-button') || target.matches('.experience-header-achievements-text')) {
        event.preventDefault();
        this.overlayVisible();
        // achievements & experience modal overlay/button 
      } else if (target.matches('.modal-experience .overlay-btn') || target.matches('.modal-experience .overlay-container') || target.matches('.modal-experience .overlay-item') || target.matches('.overlay') || target.matches('.overlay .container')) {
        event.preventDefault();
        this.overlayHidden();
      //  header menu link & mobile menu link
      } else if (target.matches('.nav-link') || target.matches('.nav-link-mobile')) {
        if (target.matches('.nav-link-mobile')) {
          this.mobileMenuBehaviour();
        }
        event.preventDefault();
        this.smoothScrollToSection(event);
      // arrow to top 
      } else if (target.matches('#totop')) {
        const id = this.document.querySelector('[href="#top-arrow"').getAttribute('href').substr(1),
        idMobile = this.document.getElementById('about').getAttribute('id');
        event.preventDefault();
        this.animateArrowTopScrolling();
        if (this.document.documentElement.offsetWidth <= 740) {
          this.arrowToTop(idMobile);
        } else {
          this.arrowToTop(id);
        }
      } else if (target.matches(`.projects-arrow-left`)) {
        event.preventDefault();
        this.backSlide();
      } else if (target.matches(`.projects-arrow-right`)) {
        event.preventDefault();
        this.forwardSlide();
      } else if (target.matches(`.lang-item span`)) {
        event.preventDefault();
        this.setLanguage(event);
      }
      // else if (target.matches('.projects-dot')) {
      //   this.autoplayStop();
      //   this.clickDots(event);
      // }
    })
    // touch events for mobile 
    if (this.document.documentElement.offsetWidth < 570) {
      this.autoplayStop();
      this.autoplay();
      // touch evens (swipes)
      this.slider.addEventListener('touchstart', (event) => {
        event.preventDefault();
        this.autoplayStop();
        this.touchesStart(event);
      }, {passive: false});
      this.slider.addEventListener('touchmove', (event) => {
        if (event.cancelable) {
          event.preventDefault();
          this.touchesMove(event);
        }   
      }, {passive: false});
      this.slider.addEventListener('touchend', (event) => {
        event.preventDefault();
        this.autoplay();
      })
      this.document.addEventListener('click', event => {
        if (event.target.matches('.projects-dot')) {
          this.autoplayStop();
          this.clickDots(event);
        }
      })
    } else if (this.document.documentElement.offsetWidth >= 570) {
      this.autoplayStop();
      this.autoplay();
      // pointer events
      this.slider.addEventListener('pointerdown', this.startDrag);
      window.addEventListener('pointerup', this.stopDrag);
      window.addEventListener('pointercancel', this.stopDrag);
      // hover and unfocused events 
      this.document.addEventListener('mouseover', e => {
        if (e.target.matches('.projects-arrow-right') || e.target.matches('.projects-arrow-left') || e.target.matches('.projects-dot') || e.target.matches('.slide img') || e.target.matches('.projects-content-description') || e.target.matches('.projects-content-title') || e.target.matches('.projects-content-technologies') || e.target.matches('.projects-content-more') || e.target.matches('.projects-content-button')) {
          e.preventDefault();
          if (e.target.matches('.projects-dot')) {
            e.target.addEventListener('click', (event) => {
              this.clickDots(event);
            })
          }
          this.autoplayStop();
        }
      })
      this.document.addEventListener('mouseout', e => {
        if (e.target.matches('.projects-arrow-right') || e.target.matches('.projects-arrow-left') || e.target.matches('.projects-dot') || e.target.matches('.slide img') || e.target.matches('.projects-content-description') || e.target.matches('.projects-content-title') || e.target.matches('.projects-content-technologies') || e.target.matches('.projects-content-more') || e.target.matches('.projects-content-button')) {
          e.preventDefault();
          // console.log('out');
          this.autoplay();
        }
      })
    }
    // fixed menu after scrolling down the page (+resize event)
    window.addEventListener('scroll', () => {
      this.scrollMenu();
      // scroll to top on huge and small screens
      this.scrollToTopHugeSmallScreen();
    });
    this.debouncedResizeGallery = debounce(this.resizeGallery);
    // resize events
    window.addEventListener('resize', ()=> {
      this.scrollMenu();
      this.debouncedResizeGallery();
    });
    // submit event for sending mail
    this.document.addEventListener('submit', event => {
      event.preventDefault();
      this.sendMail(event);
    });  
  }
}

const myWebsite = new website(document);
myWebsite.init();