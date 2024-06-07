const projects = [
    {
        title: "Recruitement",
        img: "../images/34FinalPhotos/IMG-20240409-WA0000.jpg",
        path: "#",
        icon: "../images/5x/1.jpg"
    },
    {
        title: "Tenders",
        img: "../images/34FinalPhotos/IMG-20240408-WA0005.jpg",
        path: "#",
        icon: "../images/5x/2.jpg"
    },
    {
        title: "Advertising",
        img: "../images/34FinalPhotos/IMG-20240408-WA0004.jpg",
        path: "#",
        icon: "../images/5x/5.jpg"
    },
    {
        title: "Training",
        img: "../images/34FinalPhotos/IMG-20240320-WA0054.jpg",
        path: "#",
        icon: "../images/5x/7.jpg"
    },
];


const entreprisesContainer = document.getElementById('services-home-container');

projects.forEach((feature, index) => {
    const featureItem = document.createElement('div');
    featureItem.className = ' col-md-3 wow fadeInUp';
    featureItem.style.animationDelay = `${100 * (index + 1)}ms`;

    featureItem.innerHTML = `
    <div class="feature-one__item text-center">
    <div class="feature-one__item__img3">
        <img src="${feature.img}" alt="jobpaw">
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

    entreprisesContainer.appendChild(featureItem);
});
