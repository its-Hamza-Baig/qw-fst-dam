document.addEventListener("DOMContentLoaded", function () {
  const urlParams = new URLSearchParams(window.location.search);
  const activeTab = urlParams.get("tab") || "home"; // fallback default

  // Hide all tab contents
  document.querySelectorAll(".tab-content").forEach(tab => {
    tab.classList.remove("active");
  });

  // Show the one that matches the slug
  const showTab = document.querySelector(`.tab-content[data-tab="${activeTab}"]`);
  if (showTab) showTab.classList.add("active");

  // Set active class on sidebar links
  document.querySelectorAll(".sidebar-icon").forEach(link => {
    link.classList.remove("active");
  });
  const activeLink = document.getElementById(`${activeTab}`);
  if (activeLink) activeLink.classList.add("active");
});
