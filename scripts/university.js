const universitylist = [
  {
    logo: "https://www.jobpaw.com/private/logoetablissement/418.png",
    name: "Bee Homemaking School",
    link: "university.html",
    type_training: "Technical",
    phone: "2257 7260",
    address: "Rue C. Mayard # 207, Pétion-Ville, Port-au-Prince, West",
    acronym: "-",
    website: "www.beehomamakingschool.com",
    country: "Haiti",
    fax: "999 00976 54",
    email: "info@bee.com",
    description: "Diploma in Cooking, Pastry, Women's Confectionery Cutter",
    training_program: [
      {
        speciality: "Women's confect",
        domain: "Arts, culture, design, fashion",
        duration: "2",
        type_diploma: "Technical",
        graduates: "303",
      },
      {
        speciality: "Women's confect",
        domain: "Arts, culture, design, fashion",
        duration: "2",
        type_diploma: "Technical",
        graduates: "303",
      },
    ],
  },
  {
    logo: "https://www.jobpaw.com/private/logoetablissement/418.png",
    name: "Bee Homemaking School",
    link: "bee-homemaking-school",
    type_training: "Technical",
    phone: "2257 7260",
    address: "Rue C. Mayard # 207, Pétion-Ville, Port-au-Prince, West",
    acronym: "-",
    website: "www.beehomamakingschool.com",
    country: "Haiti",
    fax: "999 00976 54",
    email: "info@bee.com",
    description: "Diploma in Cooking, Pastry, Women's Confectionery Cutter",
    training_program: [
      {
        speciality: "Women's confect",
        domain: "Arts, culture, design, fashion",
        duration: "2",
        type_diploma: "Technical",
        graduates: "303",
      },
      {
        speciality: "Women's confect",
        domain: "Arts, culture, design, fashion",
        duration: "2",
        type_diploma: "Technical",
        graduates: "303",
      },
    ],
  },
  {
    logo: "https://www.jobpaw.com/private/logoetablissement/418.png",
    name: "Bee Homemaking School",
    link: "bee-homemaking-school",
    type_training: "Technical",
    phone: "2257 7260",
    address: "Rue C. Mayard # 207, Pétion-Ville, Port-au-Prince, West",
    acronym: "-",
    website: "www.beehomamakingschool.com",
    country: "Haiti",
    fax: "999 00976 54",
    email: "info@bee.com",
    description: "Diploma in Cooking, Pastry, Women's Confectionery Cutter",
    training_program: [
      {
        speciality: "Women's confect",
        domain: "Arts, culture, design, fashion",
        duration: "2",
        type_diploma: "Technical",
        graduates: "303",
      },
      {
        speciality: "Women's confect",
        domain: "Arts, culture, design, fashion",
        duration: "2",
        type_diploma: "Technical",
        graduates: "303",
      },
    ],
  },
  {
    logo: "https://www.jobpaw.com/private/logoetablissement/418.png",
    name: "Bee Homemaking School",
    link: "bee-homemaking-school",
    type_training: "Technical",
    phone: "2257 7260",
    address: "Rue C. Mayard # 207, Pétion-Ville, Port-au-Prince, West",
    acronym: "-",
    website: "www.beehomamakingschool.com",
    country: "Haiti",
    fax: "999 00976 54",
    email: "info@bee.com",
    description: "Diploma in Cooking, Pastry, Women's Confectionery Cutter",
    training_program: [
      {
        speciality: "Women's confect",
        domain: "Arts, culture, design, fashion",
        duration: "2",
        type_diploma: "Technical",
        graduates: "303",
      },
      {
        speciality: "Women's confect",
        domain: "Arts, culture, design, fashion",
        duration: "2",
        type_diploma: "Technical",
        graduates: "303",
      },
    ],
  },
  {
    logo: "https://www.jobpaw.com/private/logoetablissement/418.png",
    name: "Bee Homemaking School",
    link: "bee-homemaking-school",
    type_training: "Technical",
    phone: "2257 7260",
    address: "Rue C. Mayard # 207, Pétion-Ville, Port-au-Prince, West",
    acronym: "-",
    website: "www.beehomamakingschool.com",
    country: "Haiti",
    fax: "999 00976 54",
    email: "info@bee.com",
    description: "Diploma in Cooking, Pastry, Women's Confectionery Cutter",
    training_program: [
      {
        speciality: "Women's confect",
        domain: "Arts, culture, design, fashion",
        duration: "2",
        type_diploma: "Technical",
        graduates: "303",
      },
      {
        speciality: "Women's confect",
        domain: "Arts, culture, design, fashion",
        duration: "2",
        type_diploma: "Technical",
        graduates: "303",
      },
    ],
  },
  {
    logo: "https://www.jobpaw.com/private/logoetablissement/418.png",
    name: "Bee Homemaking School",
    link: "bee-homemaking-school",
    type_training: "Technical",
    phone: "2257 7260",
    address: "Rue C. Mayard # 207, Pétion-Ville, Port-au-Prince, West",
    acronym: "-",
    website: "www.beehomamakingschool.com",
    country: "Haiti",
    fax: "999 00976 54",
    email: "info@bee.com",
    description: "Diploma in Cooking, Pastry, Women's Confectionery Cutter",
    training_program: [
      {
        speciality: "Women's confect",
        domain: "Arts, culture, design, fashion",
        duration: "2",
        type_diploma: "Technical",
        graduates: "303",
      },
      {
        speciality: "Women's confect",
        domain: "Arts, culture, design, fashion",
        duration: "2",
        type_diploma: "Technical",
        graduates: "303",
      },
    ],
  },
  // Additional university objects...
];

document.addEventListener("DOMContentLoaded", function () {
  const container = document.getElementById("university-list");

  universitylist.forEach((school, index) => {
    const schoolCard = document.createElement("div");
    schoolCard.className = "col-md-6 col-lg-4";
    schoolCard.style.animationDelay = `${index * 100}ms`; // Adjust animation delay as needed

    schoolCard.innerHTML = `
          <div class="service-one-card service-card-two">
              <div class="service-one-card__content">
                  <h3 style="height: 40px;" class="service-one-card__title">
                      <a href="university.html" onclick="showDetails(${index})">${school.name}</a>
                  </h3>
                  <p style="height: 50px;" class="service-one-card__text">
                      ${school.description}...
                  </p>
              </div>
              <a href="university.html" onclick="showDetails(${index})" class="service-one-card__link">
                  View details
                  <i class="icon-right-arrow"></i>
              </a>
          </div>
      `;

    container.appendChild(schoolCard);
  });

  function showDetails(index) {
    localStorage.setItem(
      "selectedUniversity",
      JSON.stringify(universitylist[index])
    );
  }
});
