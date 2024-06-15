const projects = [
    {
        title: "Accéder à mes factures",
        img: "../../assets/images/backgrounds/12.jpg",
        path: "#",
        icon: "../../assets/images/icons/1.jpg"
    },
    {
        title: "Obtenir un Proforma",
        img: "../../assets/images/backgrounds/1.jpg",
        path: "/entreprises/universities.php",
        icon: "../../assets/images/icons/2.jpg"
    },
    {
        title: "Obtenir une Facture",
        img: "../../assets/images/backgrounds/11.jpg",
        path: "#",
        icon: "../../assets/images/icons/5.jpg"
    },
    {
        title: "Publicité via Bannière web",
        img: "../../assets/images/backgrounds/2.jpg",
        path: "/entreprises/private/addAdvertisingBanner.php",
        icon: "../../assets/images/icons/7.jpg"
    },
    {
        title: "Publicité via Blast e-mail",
        img: "../../assets/images/backgrounds/10.jpg",
        path: "/entreprises/private/advertiseViaEmail.php",
        icon: "../../assets/images/icons/8.jpg"
    },
    {
        title: "Publier un séminaire",
        img: "../../assets/images/backgrounds/9.jpg",
        path: "/entreprises/private/publishaSeminar.php",
        icon: "../../assets/images/icons/9.jpg"
    },
    {
        title: "Recruter via Accès au CV",
        img: "../../assets/images/backgrounds/8.jpg",
        path: "/entreprises/private/publishaSeminar.php",
        icon: "../../assets/images/icons/10.jpg"
    },
    {
        title: "Recruter via Head Hunter",
        img: "../../assets/images/backgrounds/7.jpg",
        path: "/entreprises/private/recruterViaHeadHunter.php",
        icon: "../../assets/images/icons/11.jpg"
    },
    {
        title: "Publier une offre d’emploi",
        img: "../../assets/images/backgrounds/5.jpg",
        path: "/entreprises/private/postAJobOffer.php",
        icon: "../../assets/images/icons/12.jpg"
    },
    {
        title: "Candidatures reçues par offre",
        img: "../../assets/images/backgrounds/6.jpg",
        path: "/entreprises/private/applicationsReceived.php",
        icon: "../../assets/images/icons/11.jpg"
    },
    {
        title: "Publier un appel d’offres",
        img: "../../assets/images/backgrounds/4.jpg",
        path: "/entreprises/private/publishACallForTendersOrConsultation.php",
        icon: "../../assets/images/icons/5.jpg"
    },
    {
        title: "S’abonner aux appels d’offres",
        img: "../../assets/images/backgrounds/3.jpg",
        path: "/entreprises/private/subscriptions.php",
        icon: "../../assets/images/icons/9.jpg"
    },
    {
        title: "Modifier info représ. compagnie",
        img: "../../assets/images/backgrounds/1.jpg",
        path: "#",
        icon: "../../assets/images/icons/9.jpg"
    },
    {
        title: "Modifier info compagnie",
        img: "../../assets/images/backgrounds/4.jpg",
        path: "/entreprises/private/updateRepresentativeData.php",
        icon: "../../assets/images/icons/9.jpg"
    },
    {
        title: "Ajouter/Modifier logo compagnie",
        img: "../../assets/images/backgrounds/1.jpg",
        path: "/entreprises/private/updateProfile.php",
        icon: "../../assets/images/icons/9.jpg"
    },
    {
        title: "Publier un rapport ou une analyse",
        img: "../../assets/images/backgrounds/10.jpg",
        path: "#",
        icon: "../../assets/images/icons/9.jpg"
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