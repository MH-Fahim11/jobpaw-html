document.addEventListener("DOMContentLoaded", function () {
  const services = [
    {
      image: "../images/34FinalPhotos/IMG-20240320-WA0036.jpg",
      title: "A propos de JobPaw",
      icon: "../images/5x/1.jpg",
      path: "about.html",
    },
    {
      image: "../images/34FinalPhotos/IMG-20240320-WA0038.jpg",
      title: "Contactez-nous",
      icon: "../images/5x/2.jpg",
      path: "/professionals/cv-paw.html",
    },
    {
      image: "../images/34FinalPhotos/IMG-20240320-WA0039.jpg",
      title: "Questions-Réponses",
      icon: "../images/5x/3.jpg",
      path: "faq.html",
    },
    {
      image: "../images/34FinalPhotos/IMG-20240320-WA0042.jpg",
      title: "Témoignage",
      icon: "../images/5x/4.jpg",
      path: "/testimonials",
    },
    {
      image: "../images/34FinalPhotos/IMG-20240320-WA0045.jpg",
      title: "Mettre publicité sur JobPaw",
      icon: "../images/5x/5.jpg",
      path: "/services/advertise-on-jobpaw",
    },
    {
      image: "../images/34FinalPhotos/IMG-20240320-WA0046.jpg",
      title: "Cartographie des opportunités",
      icon: "../images/5x/6.jpg",
      path: "/services/advertise-on-jobpaw",
    },
  ];

  const serviceList = document.getElementById("service-list");

  services.forEach((feature, index) => {
    const serviceItem = document.createElement("div");
    serviceItem.className = `col-lg-4 col-md-6 wow fadeInUp`;
    serviceItem.style.animationDelay = `${100 * (index + 1)}ms`;
    serviceItem.innerHTML = `
    <div class="feature-one__item text-center">
    <div class="feature-one__item__img">
        <img  src="${feature.image}" alt="hiredots">
    </div>
    <div class="feature-one__item__content">
        <div class="feature-one__item__ball"></div>
        <div class="feature-one__item__icon"><img width="100" height="100" class=" rounded-circle" src="${feature.icon}" alt="icon"/></div>
        <h3 class="feature-one__item__title">${feature.title}</h3>
        <p class="feature-one__item__text">.</p>
        <a href="${feature.path}" class="hiredots-btn"><span>${feature.title}</span></a>
    </div>
</div>
        `;
    serviceList.appendChild(serviceItem);
  });
});
