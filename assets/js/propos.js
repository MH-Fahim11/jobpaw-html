document.addEventListener("DOMContentLoaded", function () {
  const services = [
    {
      image: "../images/34FinalPhotos/IMG-20240320-WA0036.jpg",
      title: "A propos de nous",
      icon: "../assets/images/icons/1.jpg",
      path: "../about.php",
    },
    {
      image: "../images/34FinalPhotos/IMG-20240320-WA0038.jpg",
      title: "Notre histoire",
      icon: "../assets/images/icons/2.jpg",
      path: "",
    },
    {
      image: "../images/34FinalPhotos/IMG-20240320-WA0039.jpg",
      title: "Notre équipe",
      icon: "../assets/images/icons/3.jpg",
      path: "../faq.php",
    },
    {
      image: "../images/34FinalPhotos/IMG-20240320-WA0042.jpg",
      title: "FAQ",
      icon: "../assets/images/icons/4.jpg",
      path: "",
    },
    {
      image: "../images/34FinalPhotos/IMG-20240320-WA0045.jpg",
      title: "Témoignages",
      icon: "../assets/images/icons/5.jpg",
      path: "/testimonials.php",
    },
    {
      image: "../images/34FinalPhotos/IMG-20240320-WA0046.jpg",
      title: "Contactez-nous",
      icon: "../assets/images/icons/6.jpg",
      path: "../contact.php",
    },
  ];

  const proposList = document.getElementById("propos-list");

  services.forEach((feature, index) => {
    const propoItem = document.createElement("div");
    propoItem.className = `col-lg-4 col-md-6 wow fadeInUp`;
    propoItem.style.animationDelay = `${100 * (index + 1)}ms`;
    propoItem.innerHTML = `
    <div class="feature-one__item text-center">
    <div class="feature-one__item__img">
        <img src="${feature.image}" alt="hiredots">
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
      proposList.appendChild(propoItem);
  });
});
