// Show welcome popup on page load
window.addEventListener('load', () => {
  const welcomePopup = document.getElementById('welcomePopup');
  welcomePopup.classList.add('show');

  // Auto-hide after 3 seconds
  setTimeout(() => {
    welcomePopup.classList.remove('show');
  }, 3000);
});

// Navbar toggle
const toggleBtn = document.getElementById("menu-toggle");
const navbar = document.getElementById("navbar");

toggleBtn.addEventListener("click", () => {
  navbar.classList.toggle("active");
});

// Open nickname prompt
function openNicknamePrompt() {
  document.getElementById("nicknamePopup").classList.add("show");
}

// Close nickname prompt
function closeNicknamePrompt() {
  document.getElementById("nicknamePopup").classList.remove("show");
}

// Start chat after nickname entered
function startChat() {
  const nickname = document.getElementById("nicknameInput").value.trim();

  if (nickname === "") {
    alert("Please enter your nickname.");
    return;
  }

  const chatFrame = document.getElementById("chatFrame");
  chatFrame.src = `https://hack.chat/?/TechieSusheel#${nickname}`;

  document.getElementById("nicknamePopup").classList.remove("show");
  document.getElementById("chatPopup").classList.add("show");
}

// Close chat box
function toggleChatBox() {
  document.getElementById("chatPopup").classList.remove("show");
}
