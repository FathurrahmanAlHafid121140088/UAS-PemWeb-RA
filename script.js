document
  .getElementById("dataForm")
  .addEventListener("submit", function (event) {
    event.preventDefault();

    // Mengambil nilai dari form input
    const name = document.getElementById("name").value;
    const email = document.getElementById("email").value;
    const age = document.getElementById("age").value;
    const subscribe = document.getElementById("subscribe").checked
      ? "Yes"
      : "No";

    // Membuat elemen <tr> untuk menambahkan data ke dalam tabel
    const tableBody = document.getElementById("tableBody");
    const newRow = document.createElement("tr");
    newRow.innerHTML = `
      <td>${name}</td>
      <td>${email}</td>
      <td>${age}</td>
      <td>${subscribe}</td>
    `;

    // Menambahkan data ke dalam tabel
    tableBody.appendChild(newRow);

    // Membersihkan form input setelah submit
    document.getElementById("dataForm").reset();
  });

document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById("dataForm");
  const nameInput = document.getElementById("name");
  const emailInput = document.getElementById("email");
  const ageInput = document.getElementById("age");

  // Event untuk validasi sebelum submit
  form.addEventListener("submit", function (event) {
    event.preventDefault();
    if (validateForm()) {
      processData();
      form.reset();
    } else {
      alert("Please fill in all fields correctly.");
    }
  });

  // Event untuk validasi nama
  nameInput.addEventListener("blur", function () {
    if (nameInput.value === "") {
      nameInput.classList.add("error");
    } else {
      nameInput.classList.remove("error");
    }
  });

  // Event untuk validasi email
  emailInput.addEventListener("blur", function () {
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(emailInput.value)) {
      emailInput.classList.add("error");
    } else {
      emailInput.classList.remove("error");
    }
  });

  // Event untuk validasi umur
  ageInput.addEventListener("blur", function () {
    if (isNaN(ageInput.value) || ageInput.value === "") {
      ageInput.classList.add("error");
    } else {
      ageInput.classList.remove("error");
    }
  });

  // Fungsi untuk validasi semua input
  function validateForm() {
    return (
      nameInput.value !== "" &&
      emailInput.value.match(/^[^\s@]+@[^\s@]+\.[^\s@]+$/) &&
      !isNaN(ageInput.value) &&
      ageInput.value !== ""
    );
  }

  // Fungsi untuk memproses data
  function processData() {
    const name = nameInput.value;
    const email = emailInput.value;
    const age = ageInput.value;
    const subscribe = document.getElementById("subscribe").checked
      ? "Yes"
      : "No";

    const tableBody = document.getElementById("tableBody");
    const newRow = document.createElement("tr");
    newRow.innerHTML = `
        <td>${name}</td>
        <td>${email}</td>
        <td>${age}</td>
        <td>${subscribe}</td>
      `;

    tableBody.appendChild(newRow);
  }
});
