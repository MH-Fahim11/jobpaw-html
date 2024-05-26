const data = [
    {
        name: "Publier offre d emploi",
        image: "../images/5x/7.jpg",
        link: "/professionnels/find-job",
    },
    {
        name: "Publier appel d offres",
        image: "../images/5x/5.jpg",
        link: "/professionnels",
    },
    {
        name: "Publier saminaire",
        image: "../images/5x/4.jpg",
        link: "/projets",
    },
    {
        name: "Recruiter via head Hunter",
        image: "../images/5x/3.jpg",
        link: "/services",
    },
    {
        name: "Monter son enterprise",
        image: "../images/5x/11.jpg",
        link: "/enterprises",
    },
];

document.addEventListener('DOMContentLoaded', () => {
    const container = document.getElementById('services-container');

    data.forEach((item, index) => {
        const linkElement = document.createElement('a');
        linkElement.href = item.link;
        linkElement.className = 'service-link';
        linkElement.innerHTML = `
            <div style="display: flex; justify-content: center; align-items: center;">
                <img class="w-50 h-50" src="${item.image}" alt="${item.name}">
            </div>
            <h4 class="text-center">${item.name}</h4>
        `;

        container.appendChild(linkElement);
    });
});
