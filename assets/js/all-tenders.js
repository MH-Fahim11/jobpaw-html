const tenderslist = [
    {
      logo: "../assets/images/jobs/image-1.png",
      image: "../images/34FinalPhotos/IMG-20240320-WA0018.jpg",
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
      logo: "../assets/images/jobs/image-1.png",
      image: "../images/34FinalPhotos/IMG-20240320-WA0018.jpg",
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
    },
    {
      logo: "../assets/images/jobs/image-1.png",
      image: "../images/34FinalPhotos/IMG-20240320-WA0018.jpg",
      category: "Programming & tech",
      title: "Graphic & Web Designing",
      location: "San Francisco, California",
      salary: "$75000-$90000",
      deadline: "5/1/2024",
      company: "Republic store",
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
      logo: "../assets/images/jobs/image-1.png",
      image: "../images/34FinalPhotos/IMG-20240320-WA0018.jpg",
      category: "Programming & tech",
      title: "Digital Marketing Assistant",
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
  ];



  const tendersContainer = document.getElementById('tenders-container');

  tenderslist.forEach((itam, index) => {
    const itamItem = document.createElement('div');
    // itamItem.class = 'col-lg-4 col-md-6 wow fadeInUp';
    // itamItem.style.animationDelay = `${100 * (index + 1)}ms`;

    itamItem.innerHTML = `
    <div class="jobs-list__card">
              <div class="jobs-list__left">
                <div class="jobs-list__logo">
                  <img src=${itam.logo} alt="" />
                </div>
                <div class="jobs-list__content">

                  <h3
                    style={{ marginBottom: "10px" }}
                    class="jobs-list__title"
                  >
                    ${itam.title} <br />
                    <span style={{ fontSize: "18px" }}>at ${itam.company}</span>
                  </h3>
                  <span class="jobs-list__location">
                    Location: ${itam.location}
                  </span>
                  <p class="jobs-list__location">
                    Deadline: ${itam.deadline}
                  </p>
                </div>
              </div>
              <div class="jobs-list__right">
                <span class="jobs-list__price">
                  <b>$85,000 - $90,000</b> Per Year
                </span>
                <a
                  href="/entreprises/tenders-details.php"
                  class="hiredots-btn"
                >
                  View Details
                </a>
              </div>
            </div>
    `;

    tendersContainer.appendChild(itamItem);
});
