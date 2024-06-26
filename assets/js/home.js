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


const jobslist = [
    {
        logo: "path/to/logo1.png",
        image: "path/to/image1.jpg",
        category: "Programming & tech",
        title: "Software Engineer Job",
        location: "San Francisco, California",
        salary: "$75000-$90000",
        deadline: "5/1/2024",
        company: "Brain station 23",
        responsibilities: [
            "Developing responsive web applications.",
            "Collaborating with designers and backend developers.",
            "Implementing UI/UX designs.",
            "Testing and debugging code.",
            "Optimizing application performance.",
        ],
        qualifications: [
            "Proficiency in HTML, CSS, and JavaScript.",
            "Experience with front-end frameworks such as React or Angular.",
            "Understanding of responsive design principles.",
            "Familiarity with version control systems like Git.",
            "Strong problem-solving skills.",
            "Excellent communication and teamwork abilities.",
        ],
        benefits: [
            "Competitive salary.",
            "Flexible working hours.",
            "Remote work opportunities.",
            "Professional development assistance.",
            "Healthcare benefits package.",
        ],
    },
    {
        logo: "path/to/logo2.png",
        image: "path/to/image2.jpg",
        category: "Programming & tech",
        title: "Administrative Coordinator",
        location: "San Francisco, California",
        salary: "$75000-$90000",
        deadline: "5/1/2024",
        company: "Enosis solution",
        responsibilities: [
            "Developing responsive web applications.",
            "Collaborating with designers and backend developers.",
            "Implementing UI/UX designs.",
            "Testing and debugging code.",
            "Optimizing application performance.",
        ],
        qualifications: [
            "Proficiency in HTML, CSS, and JavaScript.",
            "Experience with front-end frameworks such as React or Angular.",
            "Understanding of responsive design principles.",
            "Familiarity with version control systems like Git.",
            "Strong problem-solving skills.",
            "Excellent communication and teamwork abilities.",
        ],
        benefits: [
            "Competitive salary.",
            "Flexible working hours.",
            "Remote work opportunities.",
            "Professional development assistance.",
            "Healthcare benefits package.",
        ],
    },
    {
        logo: "path/to/logo3.png",
        image: "path/to/image3.jpg",
        category: "Programming & tech",
        title: "Human Resources Manager",
        location: "San Francisco, California",
        salary: "$75000-$90000",
        deadline: "5/1/2024",
        company: "Tiger IT",
        responsibilities: [
            "Developing responsive web applications.",
            "Collaborating with designers and backend developers.",
            "Implementing UI/UX designs.",
            "Testing and debugging code.",
            "Optimizing application performance.",
        ],
        qualifications: [
            "Proficiency in HTML, CSS, and JavaScript.",
            "Experience with front-end frameworks such as React or Angular.",
            "Understanding of responsive design principles.",
            "Familiarity with version control systems like Git.",
            "Strong problem-solving skills.",
            "Excellent communication and teamwork abilities.",
        ],
        benefits: [
            "Competitive salary.",
            "Flexible working hours.",
            "Remote work opportunities.",
            "Professional development assistance.",
            "Healthcare benefits package.",
        ],
    }
];

document.addEventListener('DOMContentLoaded', () => {
    const container = document.getElementById('jobs-container');

    jobslist.slice(0, 3).forEach((job, index) => {
        const jobElement = document.createElement('div');
        jobElement.className = 'col-md-6 col-lg-4';
        jobElement.innerHTML = `
            <div class="service-one-card service-card-two" data-wow-duration="1500ms" data-wow-delay="${index}ms">
                <div class="service-one-card__image">
                    <img src="${job.image}" alt="${job.title}">
                </div>
                <div class="service-one-card__content">
                    <div style="display: flex; justify-content: space-between" class="service-one-card__icon">
                        <img style="width: 50px; height: 50px" src="${job.logo}" alt="${job.company}">
                        <a href="/services" class="service-one-card__cat">${job.category}</a>
                    </div>
                    <h3 style="height: 50px" class="service-one-card__title">
                        <a href="${job.link}">${job.title}</a>
                    </h3>
                    <p class="service-one-card__text">Company: ${job.company}</p>
                    <p class="service-one-card__text">Deadline: ${job.deadline}</p>
                </div>
                <a href="/professionnels/find-job/${createSlug(job.title)}" class="service-one-card__link">
                    Read More
                    <i class="icon-right-arrow"></i>
                </a>
            </div>
        `;

        container.appendChild(jobElement);
    });
});

function createSlug(title) {
    return title.toLowerCase().replace(/ /g, '-').replace(/[^\w-]+/g, '');
}

