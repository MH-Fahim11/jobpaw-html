const university_services = [
  { service: "Publier Recherche et Développement (R&D)", benefit: "Gratuit" },
  { service: "Stages – Support au placement", benefit: "Gratuit" },
  {
    service: "Coaching CV - étudiants finissants",
    benefit: "Gratuit en université",
  },
  {
    service: "Coaching emploi - étudiants finissants",
    benefit: "Gratuit en université",
  },
  {
    service: "Coaching orientation - 9ème année au Bac",
    benefit: "Gratuit en école",
  },
  { service: "Alertes aux appels d’offres", benefit: "Gratuit" },
  { service: "Accès aux appels d’offres", benefit: "Gratuit" },
];

const professionals_service = [
  { service: "Publier mémoire et travail de sortie", benefit: "Gratuit" },
  { service: "Créer un CVPaw Pro", benefit: "https://goo.gl/jjyubL" },
  { service: "Coaching CV", benefit: "https://goo.gl/jjyubL" },
  { service: "Coaching emploi", benefit: "https://goo.gl/jjyubL" },
  { service: "Coaching orientation", benefit: "https://goo.gl/jjyubL" },
  {
    service: "Coaching carrière et Développement personnel",
    benefit: "https://goo.gl/jjyubL",
  },
  {
    service: "Montage et Support de Start-up",
    benefit: "https://goo.gl/jjyubL",
  },
  { service: "Alertes aux offres d’emploi", benefit: "Gratuit" },
];

const services_profession = [
  { service: "Publier une offre d’emploi", benefit: "https://goo.gl/cZaEse" },
  { service: "Recruter via le Head Hunter", benefit: "https://goo.gl/QFZ1dW" },
  { service: "Recruter dans la base de CV", benefit: "https://goo.gl/kEMp8o" },
  { service: "Publier un appel d’offres", benefit: "https://goo.gl/JtsHs8" },
  { service: "Publier un séminaire", benefit: "https://goo.gl/JrhN7M" },
  { service: "Publicité via blast e-mail", benefit: "https://goo.gl/PYSeje" },
  { service: "Publicité via bannière web", benefit: "https://goo.gl/jwi4uY" },
  {
    service: "Coaching et Analyse d’entreprise",
    benefit: "https://goo.gl/jjyubL",
  },
  {
    service: "Montage et Support de Start-up",
    benefit: "https://goo.gl/jjyubL",
  },
  { service: "Accès aux appels d’offres", benefit: "Gratuit" },
  { service: "Alertes aux appels d’offres", benefit: "Gratuit" },
  { service: "Publier rapport d’analyse et de recherche", benefit: "Gratuit" },
  { service: "Publier bourse d’étude", benefit: "Gratuit" },
];

const renderTable = (data, tableId) => {
  const tableBody = document.getElementById(tableId).querySelector("tbody");
  data.forEach((item, index) => {
    const row = document.createElement("tr");
    row.innerHTML = `
        <th scope="row">${index + 1}</th>
        <td>${item.service}</td>
        <td>${item.benefit}</td>
      `;
    tableBody.appendChild(row);
  });
};

renderTable(university_services, "university-services");
renderTable(professionals_service, "professionals-service");
renderTable(services_profession, "services-profession");
