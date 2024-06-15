document.addEventListener("DOMContentLoaded", function () {
    const services = [
      {
        image: "../assets/images/backgrounds/12.jpg",
        title: "One-pager",
        icon: "../assets/images/icons/1.jpg",
        path: "project-details.php",
      },
      {
        image: "../assets/images/backgrounds/6.jpg",
        title: "MasterClass",
        icon: "../assets/images/icons/2.jpg",
        path: "project-details.php",
      },
      {
        image: "../assets/images/backgrounds/10.jpg",
        title: "SiksèPaw-SiksèLòtyo",
        icon: "../assets/images/icons/3.jpg",
        path: "project-details.php",
      },
      {
        image: "../assets/images/backgrounds/1.jpg",
        title: "Podcast SiksèPaw-SiksèLòtyo",
        icon: "../assets/images/icons/4.jpg",
        path: "project-details.php",
      },
      
    ];
  
    const projectList = document.getElementById("project-list");
  
    services.forEach((feature, index) => {
      const projectItem = document.createElement("div");
      projectItem.className = `col-lg-4 col-md-6 wow fadeInUp`;
      projectItem.style.animationDelay = `${100 * (index + 1)}ms`;
      projectItem.innerHTML = `
      <div class="feature-one__item text-center">
      <div class="feature-one__item__img">
          <img src="${feature.image}" alt="Jobpaw">
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
          projectList.appendChild(projectItem);
    });
  });
  