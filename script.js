// script.js

// Simple data map for quick demonstration
const siteInfo = {
  haram_madani: "Al-Masjid an-Nabawi: The second holiest site in Islam, located in Medina.",
  alula: "AlUla: A historic city in northwest Saudi Arabia with remnants of ancient civilizations.",
  king_fahad_bridge: "King Fahd Causeway: Connects Saudi Arabia with the Kingdom of Bahrain.",
  jeddah_balad: "Historic Jeddah (Al-Balad): The historic district of Jeddah, known for its heritage buildings and markets.",
  haram_makki: "Masjid al-Haram: The holiest place in Islam, located in Mecca.",
  aldereyah: "Diriyah: The first capital of Saudi Arabia, rich in history and heritage.",
  edge_of_world: "Edge of the World: A famous escarpment in the Tuwaiq Mountains with breathtaking desert views.",
  ummluj_beach: "Umluj Beach: Crystal-clear waters and picturesque islands on the Red Sea.",
  jabal_souda: "Jabal Sawda: One of the highest peaks in Saudi Arabia, known for its cool climate and stunning nature.",
  farasan_island: "Farasan Island: An archipelago in the Red Sea, famous for its coral reefs and marine life."
};

function showInfo(siteKey) {
  // Show an alert with the site info, or you could display it in a hidden div
  if (siteInfo[siteKey]) {
    alert(siteInfo[siteKey]);
  } else {
    alert("No information available for this site.");
  }
}