document.addEventListener("DOMContentLoaded", function () {
  const images = document.querySelectorAll(".equal-size-image");

  images.forEach(function (image) {
      image.addEventListener("mouseenter", function () {
          setTimeout(function () {
              image.style.transform = "scale(1.1)";
          }, 100); // Adjust the delay time (in milliseconds) as needed

          image.addEventListener("mouseleave", function () {
              image.style.transform = "scale(1)";
          });
      });
  });
});

function replaceContent(imageSrc) {
  const imageContent = document.getElementById("imageContent");
  const aboutSection = document.getElementById("about"); // Get the "about" section
  const originalContent = document.getElementById("originalContent"); // Get the "about" section
  // Create a new image element with the clicked image source
  const newImage = document.createElement("img");
  newImage.src = imageSrc;
  newImage.alt = "Image description";
  newImage.className = "custom-video";
  newImage.onclick = restoreContent;

  // Animate the existing content out
  anime({
      targets: imageContent,
      opacity: 0,
      duration: 400,
      easing: 'easeInOutQuad',
      complete: function() {
          // Clear the existing content and add the new image
          imageContent.innerHTML = "";
          imageContent.appendChild(newImage);

          // Animate the new content in
          anime({
              targets: imageContent,
              opacity: 1,
              duration: 400,
              easing: 'easeInOutQuad'
          });

          // Scroll to the section
          const section = document.getElementById("hero");
          section.scrollIntoView({ behavior: 'smooth' });
           // Hide the "about" section
           aboutSection.style.display = "none";
           imageContent.style.display = "";
           originalContent.style.display = "none";
      }
  });
}

function restoreContent() {
  const imageContent = document.getElementById("imageContent");
  const aboutSection = document.getElementById("about");
  const originalContent = document.getElementById("originalContent"); // Add an ID to the original content container

  anime({
    targets: imageContent,
    opacity: 0,
    duration: 400,
    easing: 'easeInOutQuad',
    complete: function() {
      // Remove the new image and restore the original content
      imageContent.innerHTML = originalContent.innerHTML;

      anime({
        targets: imageContent,
        opacity: 1,
        duration: 400,
        easing: 'easeInOutQuad'
      });

      // Scroll back to the about section
      aboutSection.style.display = "block";
      imageContent.style.display = "none";
      originalContent.style.display = "";

      const section = document.getElementById("about"); // Change to the correct ID
      section.scrollIntoView({ behavior: 'smooth' });
    }
  });
}
