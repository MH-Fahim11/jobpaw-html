document.addEventListener("DOMContentLoaded", function () {
  const seminarItems = [
    {
      id: 1,
      image: "../assets/images/backgrounds/6.jpg",
      title: "Introduction to Data Science Workshop",
      description:
        "TechMaster Bootcamp is an intensive training program designed to equip participants with the skills and knowledge needed to excel in the rapidly evolving field of technology. Whether you're a beginner looking to kickstart your career or a seasoned professional aiming to enhance your expertise, our bootcamp offers a comprehensive curriculum tailored to meet your needs.",
      date: "May 10, 2024",
      time: "10:00 AM - 4:00 PM",
      location: "123 Main Street, Cityville",
      link: "/professionals/seminer-details.php",
    },
    {
      id: 2,
      image: "../assets/images/backgrounds/10.jpg",
      title: "Web Development Bootcamp",
      description:
        "Learn the latest technologies and frameworks in web development...",
      date: "May 15, 2024",
      time: "9:00 AM - 5:00 PM",
      location: "456 Elm Street, Townsville",
      link: "/professionals/seminer-details.php",
    },
    {
      id: 3,
      image: "../assets/images/backgrounds/7.jpg",
      title: "Learn about Digital marketing",
      description:
        "Learn the latest technologies and frameworks in web development...",
      date: "May 15, 2024",
      time: "9:00 AM - 5:00 PM",
      location: "456 Elm Street, Townsville",
      link: "/professionals/seminer-details.php",
    },
  ];

  const seminarList = document.getElementById("seminar-list");

  function createSlug(sentence) {
    return sentence
      .toLowerCase()
      .replace(/[^a-zA-Z0-9 -]/g, "")
      .replace(/\s+/g, "-")
      .replace(/-+/g, "-")
      .trim();
  }

  seminarItems.forEach((service, index) => {
    const seminarCard = document.createElement("div");
    seminarCard.className = "col-md-6 col-lg-4";
    seminarCard.innerHTML = `
            <div class="service-one-card">
                <div class="service-one-card__image">
                    <img src="${service.image}" alt="${service.title}">
                </div>
                <div class="service-one-card__content">
                    <h3 class="service-one-card__title">${service.title}</h3>
                    <p class="service-one-card__text">${service.description.slice(
                      0,
                      70
                    )}...</p>
                    <div style="margin-top: 10px; display: flex; flex-direction: column; gap: 5px;">
                        <span>Date: ${service.date}</span>
                        <span>Time: ${service.time}</span>
                    </div>
                    <a href="/professionals/seminer-details.php" class="d-flex align-items-center">
                        Book now <i class="icon-right-arrow"></i>
                    </a>
                </div>
            </div>
        `;
    seminarList.appendChild(seminarCard);
  });
});
