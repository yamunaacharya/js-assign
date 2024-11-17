// Create an array to store the name of participants who register.
// Use forEach loop to display the participant list on the webpage.

const participants = ["Ram", "Hari", "sita"];
function displayParticipants() {
    const participantList = document.getElementById("participant-list");
    participantList.innerHTML = "";
    participants.forEach((participant, index) => {
      const listItem = document.createElement("li");
      listItem.textContent = `${index + 1}. ${participant}`;
      participantList.appendChild(listItem);
    });
  }
  
  displayParticipants();