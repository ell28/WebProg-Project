// * Ketika page beres di load, memulai page dengan all category
window.addEventListener("load", () => {
  filterProduct("all");
});

// * Hard Code Data
let products = {
  data: [
    {
      // * Action
      productName: "Valorant",
      category: "Action",
      date: "2020",
      image: "assets/explore-gameicons/valorant.png",
    },
    {
      productName: "Overwatch 2",
      category: "Action",
      date: "2022",
      image: "assets/explore-gameicons/overwatch-2.jpg",
    },
    {
      productName: "Counter Strike : Global Offensive",
      category: "Action",
      date: "2012",
      image: "assets/explore-gameicons/csgo.jpg",
    },
    {
      productName: "Tom Clancy's Rainbow Six Siege",
      category: "Action",
      date: "2015",
      image: "assets/explore-gameicons/r6siege.jpg",
    },
    {
      productName: "PUBG",
      category: "Action",
      date: "2017",
      image: "assets/explore-gameicons/pubg.jpg",
    },

    // * Adventure

    {
      productName: "Grand Theft Auto V",
      category: "Adventure",
      date: "2013",
      image: "assets/explore-gameicons/gtav.jpg",
    },
    {
      productName: "The Last Of Us",
      category: "Adventure",
      date: "2013",
      image: "assets/explore-gameicons/thelastofus.jpg",
    },
    {
      productName: "Tomb Raider",
      category: "Adventure",
      date: "2013",
      image: "assets/explore-gameicons/tombraider.jpg",
    },
    {
      productName: "God Of War",
      category: "Adventure",
      date: "2018",
      image: "assets/explore-gameicons/godofwar.jpg",
    },
    {
      productName: "Dying Light",
      category: "Adventure",
      date: "2015",
      image: "assets/explore-gameicons/dyinglight.jpg",
    },

    // * Casual

    {
      productName: "Minecraft",
      category: "Casual",
      date: "2011",
      image: "assets/explore-gameicons/minecraft.jpg",
    },
    {
      productName: "Animal Crossing: New Horizons",
      category: "Casual",
      date: "2020",
      image: "assets/explore-gameicons/animalcrossing.jpg",
    },
    {
      productName: "Slime Rancher",
      category: "Casual",
      date: "2016",
      image: "assets/explore-gameicons/slimerancher.jpg",
    },
    {
      productName: "Stardew Valley",
      category: "Casual",
      date: "2016",
      image: "assets/explore-gameicons/stardewvalley.jpg",
    },
    {
      productName: "The Sims 4",
      category: "Casual",
      date: "2014",
      image: "assets/explore-gameicons/thesims4.jpg",
    },

    // * Horror

    {
      productName: "Resident Evil 7 Biohazard",
      category: "Horror",
      date: "2017",
      image: "assets/explore-gameicons/residentevil7.jpg",
    },
    {
      productName: "Metro Exodus",
      category: "Horror",
      date: "2019 ",
      image: "assets/explore-gameicons/metroexodus.png",
    },
    {
      productName: "Outlast II",
      category: "Horror",
      date: "2017",
      image: "assets/explore-gameicons/outlast2.jpg",
    },
    {
      productName: "Layers of Fear",
      category: "Horror",
      date: "2016",
      image: "assets/explore-gameicons/layersoffear.jpg",
    },
    {
      productName: "Alien: Isolation",
      category: "Horror",
      date: "2014",
      image: "assets/explore-gameicons/alienisolation.jpg",
    },
    {
      productName: "Dead by Daylight",
      category: "Horror",
      date: "2016",
      image: "assets/explore-gameicons/deadbydaylight.jpg",
    },

    // * Role-Playing

    {
      productName: "The Witcher 3: Wild Hunt",
      category: "RPG",
      date: "2015",
      image: "assets/explore-gameicons/thewitcher3.jpg",
    },
    {
      productName: "Elder Scrolls V: Skyrim",
      category: "RPG",
      date: "2011",
      image: "assets/explore-gameicons/skyrim.jpg",
    },
    {
      productName: "Legend of Zelda: Breath of the Wild",
      category: "RPG",
      date: "2017",
      image: "assets/explore-gameicons/zelda.jpg",
    },
    {
      productName: "Elden Ring",
      category: "RPG",
      date: "2022",
      image: "assets/explore-gameicons/eldenring.jpg",
    },
    {
      productName: "World of Warcraft",
      category: "RPG",
      date: "2004",
      image: "assets/explore-gameicons/wow.jpg",
    },

    // * Strategy

    {
      productName: "Starcraft II",
      category: "Strategy",
      date: "2015",
      image: "assets/explore-gameicons/starcraft2.jpg",
    },
    {
      productName: "Civilization 6",
      category: "Strategy",
      date: "2016",
      image: "assets/explore-gameicons/civilization6.jpg",
    },
    {
      productName: "Crusader Kings 3",
      category: "Strategy",
      date: "2020",
      image: "assets/explore-gameicons/crusaderkings3.jpg",
    },
    {
      productName: "XCOM 2",
      category: "Strategy",
      date: "2016",
      image: "assets/explore-gameicons/xcom2.jpg",
    },
    {
      productName: "Total War: Warhammer 3",
      category: "Strategy",
      date: "2022",
      image: "assets/explore-gameicons/warhammer.jpg",
    },

    // * MOBA

    {
      productName: "Dota II",
      category: "MOBA",
      date: "2013",
      image: "assets/explore-gameicons/dota2.jpg",
    },
    {
      productName: "League of Legends",
      category: "MOBA",
      date: "2009",
      image: "assets/explore-gameicons/lol.jpg",
    },
  ],
};

// * Looping untuk isi konten dari data
for (let i of products.data) {
  // * Membuat kartu
  let card = document.createElement("div");

  // * Membuat class (card, i.category dan hide)
  card.classList.add("card", i.category, "hide");

  // * Div untuk image
  let imgContainer = document.createElement("div");
  let image = document.createElement("img");
  image.setAttribute("src", i.image);
  imgContainer.appendChild(image);
  card.appendChild(imgContainer);

  // * Membuat container untuk konten
  let container = document.createElement("div");
  container.classList.add("container");

  // * Product name
  let name = document.createElement("h5");
  name.classList.add("product-name");
  name.innerText = i.productName.toUpperCase();
  container.appendChild(name);

  // * Output genre
  let category = document.createElement("h6");
  category.innerText = i.category;
  container.appendChild(category);

  // * Output release date
  let dateOutput = document.createElement("h6");
  dateOutput.innerText = i.date;
  container.appendChild(dateOutput);

  // * Kartu di append ke dalam container untuk menampilkan kartu
  card.appendChild(container);
  document.getElementById("products").appendChild(card);
}

// * Function filter
function filterProduct(value) {
  // * Button category (active / not active)
  let buttons = document.querySelectorAll(".buttons");
  buttons.forEach((button) => {
    if (value.toUpperCase() == button.innerText.toUpperCase()) {
      button.classList.add("active");
    } else {
      button.classList.remove("active");
    }
  });

  // * Display kartu sesuai dengan value
  let cards = document.querySelectorAll(".card");
  cards.forEach((card) => {
    // * Menunjukkan category all 
    if (value.toLowerCase() == "all") {
      card.classList.remove("hide");
    } else {
    // * Menunjukkan kartu - kartu yang memiliki value yang sama
      if (card.classList.contains(value)) {
        card.classList.remove("hide");
      } else {
    // * Menyembunyikan kartu - kartu yang lainnya
        card.classList.add("hide");
      }
    }
  });
}

// * Script untuk mengosongkan search bar dan remove error message
const buttons = document.querySelectorAll(".buttons");
buttons.forEach((button) => {
  button.addEventListener("click", () => {
    document.querySelector("#searchbar").value = "";
    document.querySelector(".errorMessage").innerHTML = "";
    filterProduct(button.innerText);
  });
});

// * Script untuk submit
document.querySelector("#search").addEventListener("submit", (e) => {
  console.log(e);
  e.preventDefault();
  // * Script untuk mematikan tombol yang active ketika user submit
  let activeBtn = document.querySelector(".buttons.active");
  if (activeBtn) {
    activeBtn.classList.remove("active");
  }

  
  // * Inisialisasi untuk search dengan keyword
  let searchInput = document.getElementById("searchbar").value;
  let productNames = document.querySelectorAll(".product-name");
  let cards = document.querySelectorAll(".card");
  let errorMessage = document.querySelector(".errorMessage");
  let gameFound = false;

  // * Search function
  productNames.forEach((productName, i) => {
    // * Cek jika value produk name memiliki keyword dari input
    if (productName.innerText.includes(searchInput.toUpperCase())) {
      gameFound = true;
      cards[i].classList.remove("hide");
    } else {
      cards[i].classList.add("hide");
    }
  });

// * Script untuk mengeluarkan error
  if (!gameFound) {
    errorMessage.innerHTML = "The keyword " + "'" + searchInput + "'" + " does not match any games in our library";
  } else {
    errorMessage.innerHTML = "";
  }
});


// * Modal
const cards = document.querySelectorAll(".card");
const modal = document.querySelector(".modal");
const modalContainer = document.querySelector(".modal-container");

function renderModal(product) {
  return `
    <img src=${product.image} alt=${product.image} />
    <div class="modal-description">
      <div>Product name : ${product.productName}</div>
      <div>Category : ${product.category}</div>
      <div>Date : ${product.date}</div>
      <span>${product.description}</span>
    </div>
    <svg clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="close-btn" width="24" height="24">
    <path
      d="m12 10.93 5.719-5.72c.146-.146.339-.219.531-.219.404 0 .75.324.75.749 0 .193-.073.385-.219.532l-5.72 5.719 5.719 5.719c.147.147.22.339.22.531 0 .427-.349.75-.75.75-.192 0-.385-.073-.531-.219l-5.719-5.719-5.719 5.719c-.146.146-.339.219-.531.219-.401 0-.75-.323-.75-.75 0-.192.073-.384.22-.531l5.719-5.719-5.72-5.719c-.146-.147-.219-.339-.219-.532 0-.425.346-.749.75-.749.192 0 .385.073.531.219z"
    />
  </svg>
    `;
}

cards.forEach((card, i) => {
  card.addEventListener("click", function () {
    const modalInnerHTML = renderModal(products.data[i]);
    modalContainer.style.display = "flex";
    modal.innerHTML = modalInnerHTML;
    const closeBtn = document.querySelector(".close-btn");
    closeBtn.addEventListener("click", function () {
      modalContainer.style.display = "none";
    });
  });
});
