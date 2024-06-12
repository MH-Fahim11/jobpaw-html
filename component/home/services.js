const projects = [
    {
        title: "Recruitement",
        img: "../assets/images/services/10.jpg",
        path: "#",
        icon: "../assets/images/icons/1.jpg"
    },
    {
        title: "Tenders",
        img: "../assets/images/services/11.jpg",
        path: "#",
        icon: "../assets/images/icons/12.jpg"
    },
    {
        title: "Advertising",
        img: "../assets/images/services/12.jpg",
        path: "#",
        icon: "../assets/images/icons/5.jpg"
    },
    {
        title: "Training",
        img: "../assets/images/services/13.jpg",
        path: "#",
        icon: "../assets/images/icons/7.jpg"
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
