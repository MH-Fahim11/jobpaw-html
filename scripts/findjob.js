document.addEventListener("DOMContentLoaded", function () {
  const jobsContainer = document.getElementById("jobs");

  function createSlug(sentence) {
    return sentence
      .toLowerCase()
      .replace(/[^a-zA-Z0-9 -]/g, "")
      .replace(/\s+/g, "-")
      .replace(/-+/g, "-")
      .trim();
  }

  const jobslist = [
    {
      logo: "../images/jobs/image-1.png",
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
      logo: "../images/jobs/image-1.png",
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
      logo: "../images/jobs/image-1.png",
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
      logo: "../images/jobs/image-1.png",
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

  const jobsListContainer = document.createElement("div");
  jobsListContainer.className = "container";
  jobsContainer.appendChild(jobsListContainer);

  const jobsList = document.createElement("div");
  jobsList.className = "jobs-list";
  jobsListContainer.appendChild(jobsList);

  jobslist.forEach((job, index) => {
    const jobCard = document.createElement("div");
    jobCard.className = "jobs-list__card";
    jobsList.appendChild(jobCard);

    const jobLeft = document.createElement("div");
    jobLeft.className = "jobs-list__left";
    jobCard.appendChild(jobLeft);

    const jobLogo = document.createElement("div");
    jobLogo.className = "jobs-list__logo";
    jobLeft.appendChild(jobLogo);

    const logoImg = document.createElement("img");
    logoImg.src = job.logo;
    logoImg.alt = "Job Logo";
    jobLogo.appendChild(logoImg);

    const jobContent = document.createElement("div");
    jobContent.className = "jobs-list__content";
    jobLeft.appendChild(jobContent);

    const jobTime = document.createElement("span");
    jobTime.className = "jobs-list__time";
    jobTime.innerHTML = '<i class="fas fa-clock"></i> Posted 3 days ago';
    jobContent.appendChild(jobTime);

    const jobTitle = document.createElement("h3");
    jobTitle.className = "jobs-list__title";
    jobTitle.style.marginBottom = "10px";
    jobTitle.innerHTML = `${job.title} <br> <span style="font-size: 18px;">at ${job.company}</span>`;
    jobContent.appendChild(jobTitle);

    const jobLocation = document.createElement("span");
    jobLocation.className = "jobs-list__location";
    jobLocation.textContent = `Location: ${job.location}`;
    jobContent.appendChild(jobLocation);

    const jobDeadline = document.createElement("p");
    jobDeadline.className = "jobs-list__location";
    jobDeadline.textContent = `Deadline: ${job.deadline}`;
    jobContent.appendChild(jobDeadline);

    const jobRight = document.createElement("div");
    jobRight.className = "jobs-list__right";
    jobCard.appendChild(jobRight);

    const jobPrice = document.createElement("span");
    jobPrice.className = "jobs-list__price";
    jobPrice.innerHTML = `<b>$85,000 - $90,000</b> Per Year`;
    jobRight.appendChild(jobPrice);

    const viewDetailsLink = document.createElement("a");
    viewDetailsLink.href = `/professionnels/find-job/${createSlug(job.title)}`;
    viewDetailsLink.className = "hiredots-btn";
    viewDetailsLink.textContent = "View Details";
    jobRight.appendChild(viewDetailsLink);
  });
});
