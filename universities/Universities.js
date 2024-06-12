const projects = [
    {
        title: "Adapter les formations au marché",
        img: "../images/34FinalPhotos/IMG-20240409-WA0000.jpg",
        path: "/",
        icon: "../assets/images/icons/1.jpg"
    },
    {
        title: "Promouvoir son université ou son école",
        img: "../images/34FinalPhotos/IMG-20240408-WA0005.jpg",
        path: "",
        icon: "../assets/images/icons/2.jpg"
    },
    {
        title: "Stimuler recherche et innovation",
        img: "../images/34FinalPhotos/IMG-20240408-WA0004.jpg",
        path: "",
        icon: "../assets/images/icons/5.jpg"
    },
    {
        title: "Valoriser les diplomés",
        img: "../images/34FinalPhotos/IMG-20240320-WA0054.jpg",
        path: "",
        icon: "../assets/images/icons/7.jpg"
    },
    {
        title: "Partager les travaux de recherche",
        img: "../images/34FinalPhotos/IMG-20240320-WA0052.jpg",
        path: "",
        icon: "../assets/images/icons/8.jpg"
    },
    {
        title: "Opportunités d’affaires",
        img: "../images/34FinalPhotos/IMG-20240320-WA0039.jpg",
        path: "",
        icon: "../assets/images/icons/9.jpg"
    }
];

const container = document.getElementById('universities-container');

projects.forEach((feature, index) => {
    const featureItem = document.createElement('div');
    featureItem.className = 'col-lg-4 col-md-6 wow fadeInUp';
    featureItem.style.animationDelay = `${100 * (index + 1)}ms`;

    featureItem.innerHTML = `
    <div class="feature-one__item text-center">
    <div class="feature-one__item__img">
        <img src="${feature.img}" alt="hiredots">
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

    container.appendChild(featureItem);
});
