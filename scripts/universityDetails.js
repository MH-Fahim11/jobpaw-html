document.addEventListener("DOMContentLoaded", function () {
  const universityDetails = document.querySelector(".university-details");
  const backButton = document.querySelector(".back-button");

  const selectedUniversity = JSON.parse(
    localStorage.getItem("selectedUniversity")
  );

  if (selectedUniversity) {
    const logo = universityDetails.querySelector(".logo img");
    const name = universityDetails.querySelector(".name");
    const description = universityDetails.querySelector(".description");
    const address = universityDetails.querySelector(".address");
    const phone = universityDetails.querySelector(".phone");
    const email = universityDetails.querySelector(".email");
    const website = universityDetails.querySelector(".website");

    logo.src = selectedUniversity.logo;
    name.textContent = selectedUniversity.name;
    description.textContent = selectedUniversity.description;
    address.textContent = "Address: " + selectedUniversity.address;
    phone.textContent = "Phone: " + selectedUniversity.phone;
    email.textContent = "Email: " + selectedUniversity.email;
    website.textContent = "Website: " + selectedUniversity.website;
  } else {
    universityDetails.innerHTML = "<p>University details not found.</p>";
  }

  backButton.addEventListener("click", function () {
    localStorage.removeItem("selectedUniversity");
  });
});
