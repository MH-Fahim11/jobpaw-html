const projects = [
    {
        title: "Accéder à mes factures",
        img: "../../images/34FinalPhotos/IMG-20240409-WA0000.jpg",
        path: "#",
        icon: "../../images/5x/1.jpg"
    },
    {
        title: "Obtenir un Proforma",
        img: "../../images/34FinalPhotos/IMG-20240408-WA0005.jpg",
        path: "/entreprises/universities.php",
        icon: "../../images/5x/2.jpg"
    },
    {
        title: "Obtenir une Facture",
        img: "../../images/34FinalPhotos/IMG-20240408-WA0004.jpg",
        path: "#",
        icon: "../../images/5x/5.jpg"
    },
    {
        title: "Publicité via Bannière web",
        img: "../../images/34FinalPhotos/IMG-20240320-WA0054.jpg",
        path: "#",
        icon: "../../images/5x/7.jpg"
    },
    {
        title: "Publicité via Blast e-mail",
        img: "../../images/34FinalPhotos/IMG-20240320-WA0052.jpg",
        path: "#",
        icon: "../../images/5x/8.jpg"
    },
    {
        title: "Publier un séminaire",
        img: "../../images/34FinalPhotos/IMG-20240320-WA0039.jpg",
        path: "#",
        icon: "../../images/5x/9.jpg"
    },
    {
        title: "Recruter via Accès au CV",
        img: "../../images/34FinalPhotos/IMG-20240320-WA0036.jpg",
        path: "#",
        icon: "../../images/5x/10.jpg"
    },
    {
        title: "Recruter via Head Hunter",
        img: "../../images/34FinalPhotos/IMG-20240320-WA0027.jpg",
        path: "#",
        icon: "../../images/5x/11.jpg"
    },
    {
        title: "Publier une offre d’emploi",
        img: "../../images/34FinalPhotos/IMG-20240320-WA0015.jpg",
        path: "#",
        icon: "../../images/5x/12.jpg"
    },
    {
        title: "Candidatures reçues par offre",
        img: "../../images/34FinalPhotos/IMG-20240320-WA0052.jpg",
        path: "#",
        icon: "../../images/5x/11.jpg"
    },
    {
        title: "Publier un appel d’offres",
        img: "../../images/34FinalPhotos/IMG-20240320-WA0015.jpg",
        path: "#",
        icon: "../../images/5x/5.jpg"
    },
    {
        title: "S’abonner aux appels d’offres",
        img: "../../images/34FinalPhotos/IMG-20240320-WA0015.jpg",
        path: "#",
        icon: "../../images/5x/9.jpg"
    },
    {
        title: "Modifier info représ. compagnie",
        img: "../../images/34FinalPhotos/IMG-20240320-WA0015.jpg",
        path: "#",
        icon: "../../images/5x/9.jpg"
    },
    {
        title: "Modifier info compagnie",
        img: "../../images/34FinalPhotos/IMG-20240320-WA0015.jpg",
        path: "#",
        icon: "../../images/5x/9.jpg"
    },
    {
        title: "Ajouter/Modifier logo compagnie",
        img: "../../images/34FinalPhotos/IMG-20240320-WA0015.jpg",
        path: "#",
        icon: "../../images/5x/9.jpg"
    },
    {
        title: "Publier un rapport ou une analyse",
        img: "../../images/34FinalPhotos/IMG-20240320-WA0015.jpg",
        path: "#",
        icon: "../../images/5x/9.jpg"
    },
];


const entreprisesPrivateContainer = document.getElementById('entreprises-private-container');

projects.forEach((itam, index) => {
    const itamItem = document.createElement('div');
    itamItem.className = 'col-lg-4 col-md-6 wow fadeInUp';
    itamItem.style.animationDelay = `${100 * (index + 1)}ms`;

    itamItem.innerHTML = `
    <div class="feature-one__item text-center">
    <div class="feature-one__item__img2">
        <img hight="100px" width="100px" src="${itam.icon}" alt="hiredots">
    </div>
    <div class="feature-one__item__content">
       
        <a href="${itam.path}" class="hiredots-btn"><span>${itam.title}</span></a>
    </div>
</div>
    `;

    entreprisesPrivateContainer.appendChild(itamItem);
});
console,log("gggg")