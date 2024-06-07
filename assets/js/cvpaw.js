document.addEventListener("DOMContentLoaded", function () {
  const container = document.getElementById("container");

  const data = [
    {
      img: "../images/professionnels/cvpaw/cv.png",
      name: "Voir mon CVPaw",
    },
    {
      img: "../images/professionnels/cvpaw/cv.png",
      name: "Créer un CVPaw",
    },
    {
      img: "../images/professionnels/cvpaw/modify.png",
      name: "Modifier mon CVPaw",
    },
    {
      img: "../images/professionnels/cvpaw/job.png",
      name: "S’abonner aux offres d’emploi",
    },
    {
      img: "../images/professionnels/cvpaw/memoire.png",
      name: "Appliquer pour un poste",
    },
    {
      img: "../images/professionnels/cvpaw/modify.png",
      name: "Lister mes applications",
    },
    {
      img: "../images/professionnels/cvpaw/list.png",
      name: "Publier un article/mémoire",
    },
    {
      img: "../images/professionnels/cvpaw/suscribe.png",
      name: "Lister mes articles",
    },
  ];

  const header = document.createElement("h2");
  header.textContent = "Welcome, Mehetaj Khandaker";
  container.appendChild(header);

  const paragraph1 = document.createElement("p");
  paragraph1.innerHTML = `
        From this interface, you can update your profile. You will discover a universe of opportunities: 
        <a href="#">create professional CV, find profession, job, internship, seminar, coaching, statistics, scholarship, etc.</a>
    `;
  container.appendChild(paragraph1);

  const paragraph2 = document.createElement("p");
  paragraph2.innerHTML = `
        The platform guides you in your decisions: 
        <a href="#">professional guidance, professional integration, entrepreneurship, personal development, etc.</a>
    `;
  container.appendChild(paragraph2);

  const row = document.createElement("div");
  row.className = "row gutter-y-30";
  container.appendChild(row);

  data.forEach((feature, index) => {
    const col = document.createElement("div");
    col.className = "col-lg-3 col-md-6 wow fadeInUp";
    col.dataset.wowDelay = `${100 * (index + 1)}ms`;
    row.appendChild(col);

    const featureItem = document.createElement("div");
    featureItem.className = "feature-one__item text-center ";
    col.appendChild(featureItem);

    const featureImg = document.createElement("div");
    featureImg.className = "feature-one__item__img3";
    featureItem.appendChild(featureImg);

    const img = document.createElement("img");
    img.src = feature.img;
    img.alt = "hiredots";
    img.width = 150;
    img.height = 150;
    featureImg.appendChild(img);

    const featureContent = document.createElement("div");
    featureContent.className = "feature-one__item__content";
    featureItem.appendChild(featureContent);

    const featureBall = document.createElement("div");
    featureBall.className = "feature-one__item__ball";
    featureContent.appendChild(featureBall);

    const featureTitle = document.createElement("p");
    featureTitle.style.fontSize = "18px";
    featureTitle.className = "feature-one__item__title";
    featureTitle.textContent = feature.name;
    featureContent.appendChild(featureTitle);

    const link = document.createElement("a");
    link.href = feature.path;
    link.className = "hiredots-btn";
    link.style.height = "65px";
    link.innerHTML = `<span>${feature.name}</span>`;
    featureContent.appendChild(link);
  });

  const invitation = document.createElement("h6");
  invitation.className = "m-2 mt-5";
  invitation.textContent =
    "Nous vous invitons à faire partie des contributeurs de la plateforme JobPaw en:";
  container.appendChild(invitation);

  const list = document.createElement("ul");
  container.appendChild(list);

  const items = [
    "Partageant, avec le bouton share, les pages de JobPaw avec vos contacts e-mail, Facebook, Twitter, Instagram, LinkedIn, etc.",
    "Commentant, avec Disqus, les pages de JobPaw.com.",
    "Suivant nos pages Facebook, Twitter, Instagram, LinkedIn",
  ];

  items.forEach((itemText) => {
    const item = document.createElement("li");
    item.textContent = itemText;
    list.appendChild(item);
  });
});
