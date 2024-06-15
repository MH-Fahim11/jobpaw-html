const projects = [
    {
        title: "Voir mon CVPaw",
        img: "../../assets/images/backgrounds/4.jpg",
        path: "/professionals/private/updateYourProfile.php",
        icon: "../../assets/images/icons/1.jpg"
    },
    {
        title: "Créer un CVPaw",
        img: "../../assets/images/backgrounds/6.jpg",
        path: "/professionals/private/updateYourProfile2.php",
        icon: "../../assets/images/icons/2.jpg"
    },
    {
        title: "Modifier mon CVPaw",
        img: "../../assets/images/backgrounds/8.jpg",
        path: "/professionals/private/updateYourProfile2.php",
        icon: "../../assets/images/icons/5.jpg"
    },
    {
        title: "S’abonner aux offres d’emploi",
        img: "../../assets/images/backgrounds/9.jpg",
        path: "/professionals/private/JobAlerts.php",
        icon: "../../assets/images/icons/7.jpg"
    },
    {
        title: "Appliquer pour un poste",
        img: "../../assets/images/backgrounds/10.jpg",
        path: "/professionals/private/JobOffers.php",
        icon: "../../assets/images/icons/8.jpg"
    },
    {
        title: "Lister mes applications",
        img: "../../assets/images/backgrounds/11.jpg",
        path: "/professionals/private/myJobApplications.php",
        icon: "../../assets/images/icons/9.jpg"
    },
    {
        title: "Publier un article/mémoire",
        img: "../../assets/images/backgrounds/2.jpg",
        path: "/professionals/private/publishAnArticleOrReportAnalysis.php",
        icon: "../../assets/images/icons/10.jpg"
    },
    {
        title: "Lister mes articles",
        img: "../../assets/images/backgrounds/1.jpg",
        path: "/professionals/private/articles.php",
        icon: "../../assets/images/icons/11.jpg"
    },
    
];


const entreprisesPrivateContainer = document.getElementById('professionals-private-container');

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
