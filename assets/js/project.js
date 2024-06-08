document.addEventListener("DOMContentLoaded", function () {
    const services = [
      {
        image: "../images/34FinalPhotos/IMG-20240320-WA0036.jpg",
        title: "One-pager",
        icon: "../images/5x/1.jpg",
        path: "project-details.php",
      },
      {
        image: "../images/34FinalPhotos/IMG-20240320-WA0038.jpg",
        title: "MasterClass",
        icon: "../images/5x/2.jpg",
        path: "project-details.php",
      },
      {
        image: "../images/34FinalPhotos/IMG-20240320-WA0039.jpg",
        title: "SiksèPaw-SiksèLòtyo",
        icon: "../images/5x/3.jpg",
        path: "project-details.php",
      },
      {
        image: "../images/34FinalPhotos/IMG-20240320-WA0042.jpg",
        title: "Podcast SiksèPaw-SiksèLòtyo",
        icon: "../images/5x/4.jpg",
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
          <img src="${feature.image}" alt="hiredots">
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
  