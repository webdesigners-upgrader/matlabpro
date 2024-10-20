

const reviews = [
    { review: "Exceptional work on our mobile app. Highly recommended!", name: "John Doe", rating: 5 },
    { review: "The team delivered exactly what we needed for our website revamp.", name: "Sarah Lee", rating: 4.9 },
    { review: "Fast and efficient development with great attention to detail.", name: "Michael Smith", rating: 4.8 },
    { review: "The developers ensured our project was completed on time and within budget.", name: "Anna Taylor", rating: 5 },
    { review: "Very pleased with the app! It's intuitive and fast.", name: "James Johnson", rating: 4.7 },
    { review: "Reliable service with great communication throughout the project.", name: "Laura Martinez", rating: 4.6 },
    { review: "They exceeded expectations on our e-commerce platform development.", name: "Daniel Wilson", rating: 5 },
    { review: "Fantastic developers, great experience all around!", name: "Emily Clark", rating: 5 },
    { review: "They took our complex requirements and delivered a flawless app.", name: "David Hernandez", rating: 4.9 },
    { review: "Wonderful service, fast delivery, and excellent support after launch.", name: "Sophia Robinson", rating: 5 },
    { review: "Top-notch app developers with great problem-solving skills.", name: "Ethan Walker", rating: 4.8 },
    { review: "They provided us with innovative solutions to improve our web platform.", name: "Olivia Brown", rating: 4.7 },
    { review: "We had a great collaboration. They understood our vision and executed perfectly.", name: "Benjamin Harris", rating: 5 },
    { review: "Very professional team. Their work on our app was excellent.", name: "Ava Davis", rating: 4.9 },
    { review: "Delivered the app faster than expected with amazing quality.", name: "Henry Adams", rating: 5 },
    { review: "The website they developed for us is stunning and fully functional.", name: "Mia Thompson", rating: 4.7 },
    { review: "We faced no issues during the development process. Highly recommended.", name: "Lucas Scott", rating: 4.8 },
    { review: "Great team! They helped us at every step from ideation to execution.", name: "Lily White", rating: 5 },
    { review: "The app was built with precision and delivered ahead of schedule.", name: "William Green", rating: 4.9 },
    { review: "They optimized our web app and improved performance dramatically.", name: "Emma Turner", rating: 4.6 },
    { review: "We couldn't be happier with their work on our mobile app.", name: "Jackson Cooper", rating: 5 },
    { review: "Amazing developers! They delivered more than what we asked for.", name: "Amelia Perez", rating: 5 },
    { review: "They worked well under tight deadlines and delivered great results.", name: "Mason Hill", rating: 4.7 },
    { review: "Our experience with them was fantastic, and the app is performing flawlessly.", name: "Ella Phillips", rating: 4.8 },
    { review: "They developed a custom feature for our app that works seamlessly.", name: "Logan Evans", rating: 4.9 },
    { review: "Very pleased with their ability to meet our business requirements.", name: "Grace Carter", rating: 4.7 },
    { review: "Excellent communication and quick delivery of a fully functional website.", name: "Alexander Reed", rating: 5 },
    { review: "Superb developers. We had a smooth and efficient collaboration.", name: "Harper Parker", rating: 5 },
    { review: "They helped us scale our app and provided excellent support.", name: "James Lewis", rating: 4.8 },
    { review: "Their full-stack capabilities are unmatched. Amazing job!", name: "Sophia Collins", rating: 4.9 },
    { review: "The app design is modern, and the backend is robust. Great job.", name: "Daniel Bennett", rating: 4.7 },
    { review: "Delivered a high-quality product that exceeded our expectations.", name: "Chloe Morris", rating: 5 },
    { review: "They handled all our requests and changes smoothly.", name: "Noah Roberts", rating: 4.8 },
    { review: "One of the best teams we've worked with. Their expertise is clear.", name: "Liam Richardson", rating: 4.9 },
    { review: "Super responsive and professional developers. Our app works great.", name: "Emily Price", rating: 5 },
    { review: "Their technical knowledge and customer service are excellent.", name: "Oliver Bell", rating: 4.7 },
    { review: "The app was launched successfully without any issues. Amazing team!", name: "Aiden Rivera", rating: 5 },
    { review: "We appreciate their attention to detail and customer-oriented approach.", name: "Charlotte Stewart", rating: 4.8 },
    { review: "They managed the project efficiently and delivered great results.", name: "Ethan Hayes", rating: 4.7 },
    { review: "Working with them has been a great experience. The final product is fantastic.", name: "Isabella Cox", rating: 5 },
    { review: "We were impressed by their skills and commitment to the project.", name: "Lily Powell", rating: 4.9 },
    { review: "Professional, fast, and reliable developers. Highly recommended.", name: "Mason Russell", rating: 4.8 },
    { review: "Great job on our web app. The user experience is top-notch.", name: "Harper Torres", rating: 5 },
    { review: "They built a solid mobile app that works perfectly across devices.", name: "Liam Sanders", rating: 4.7 },
    { review: "Their creative approach to solving problems really helped our project.", name: "James Peterson", rating: 4.9 },
    { review: "The team was responsive and delivered high-quality work.", name: "Amelia Butler", rating: 5 },
    { review: "Their expertise in app development is clearly reflected in their work.", name: "Oliver Kelly", rating: 4.8 },
    { review: "Outstanding work! We couldn't be more satisfied with the app.", name: "Sophia Flores", rating: 5 },
    { review: "Delivered a modern and well-functioning app on time.", name: "Noah Gonzales", rating: 4.9 },
    { review: "We were delighted with the website they built for us. Great design.", name: "Liam Brooks", rating: 5 },
    { review: "Top-tier developers! Their knowledge and experience really shine through.", name: "Emma Jenkins", rating: 4.7 },
    { review: "They exceeded our expectations and provided a flawless app.", name: "Aiden Rogers", rating: 5 },
    { review: "Great support and excellent quality work. The app is just what we needed.", name: "Ella Barnes", rating: 4.8 },
    { review: "Working with this team has been an absolute pleasure.", name: "Grace Murphy", rating: 4.9 },
    { review: "They delivered high-quality work and provided excellent support post-launch.", name: "William Bryant", rating: 4.7 },
    { review: "They built a fast, responsive web app for our business. Highly recommend.", name: "Amelia Mitchell", rating: 5 },
    { review: "Incredible team! They built a high-performance app for us.", name: "Oliver Gray", rating: 5 },
    { review: "Very knowledgeable developers. They delivered a perfect product.", name: "Lily Bailey", rating: 4.8 },
    { review: "They understood our needs and built an app that aligns perfectly with our business.", name: "James Ward", rating: 4.9 },
    { review: "Professional and talented developers. Our project went smoothly.", name: "Sophia Cooper", rating: 5 },
    { review: "They delivered a robust app ahead of schedule, exceeding expectations.", name: "Henry King", rating: 4.7 },
    { review: "Amazing communication and quick turnarounds. Highly recommend.", name: "Emily Phillips", rating: 4.9 },
    { review: "The team worked tirelessly to meet our tight deadlines. Great work.", name: "Liam Anderson", rating: 4.8 },
    { review: "Their coding skills and knowledge of modern technologies are impressive.", name: "Emma Scott", rating: 5 },
    { review: "Delivered a fantastic app and provided great post-launch support.", name: "Isabella Moore", rating: 4.7 },
    { review: "We loved working with them. They built an app that’s easy to use and scalable.", name: "Mason Taylor", rating: 4.8 },
    { review: "Their understanding of app development helped us launch successfully.", name: "Charlotte Ross", rating: 5 },
    { review: "The quality of their work is top-notch. We're very happy with the final product.", name: "Logan Campbell", rating: 5 },
    { review: "They worked efficiently and delivered a high-quality app.", name: "Sophia Rivera", rating: 4.9 },
    { review: "Our app is performing flawlessly, thanks to their expertise.", name: "Aiden Bailey", rating: 4.8 },
    { review: "Fantastic service! They built our app just as we envisioned.", name: "Grace Edwards", rating: 5 },
    { review: "Great results delivered on time. The developers were communicative throughout.", name: "James Morris", rating: 4.9 },
    { review: "Their coding skills are top-tier, and they built a robust app for us.", name: "Harper Rogers", rating: 5 },
    { review: "We are thrilled with the results. The app works flawlessly.", name: "Oliver Foster", rating: 4.8 },
    { review: "Great job! They took our project from concept to completion with ease.", name: "Lily Bell", rating: 5 },
    { review: "Professional team with a great understanding of app development.", name: "Emma Richardson", rating: 4.7 },
    { review: "The app was delivered on time and works perfectly across all devices.", name: "Liam Powell", rating: 4.9 },
    { review: "We appreciated their attention to detail and dedication to the project.", name: "Noah Howard", rating: 4.8 },
    { review: "They provided excellent post-launch support. Highly recommended!", name: "Sophia Cox", rating: 5 },
    { review: "Great job on our website. It's fast and responsive.", name: "Ethan Bennett", rating: 4.7 },
    { review: "The app they developed for us is user-friendly and scalable.", name: "Charlotte Parker", rating: 4.9 },
    { review: "Their expertise in full-stack development is evident in their work.", name: "James Kelly", rating: 5 },
    { review: "They handled our project professionally and delivered outstanding results.", name: "Isabella Adams", rating: 4.8 },
    { review: "Very happy with the app they built for us. The process was smooth.", name: "William Coleman", rating: 4.9 },
    { review: "They managed our project efficiently and delivered on time.", name: "Amelia Brooks", rating: 4.7 },
    { review: "Their technical knowledge and problem-solving skills are impressive.", name: "Lucas Sanders", rating: 5 }
  ];
  
  const reviewelement = document.querySelector(".reviewl");
  const paraelement =  document.querySelector(".para");
  const raterelement = document.querySelector(".rater");
  const btnclselement = document.querySelector(".btncls");
  const personelement = document.querySelector(".person")

  btnclselement.addEventListener("click",contentpart);

  function contentpart(){
    let randomelemt = Math.floor(Math.random()*reviews.length)

    paraelement.textContent =  reviews[randomelemt].review;
    personelement.textContent = reviews[randomelemt].name;
    raterelement.textContent = reviews[randomelemt].rating
  }

  let currentSlide = 0;
  const totalSlides = document.querySelectorAll('.slide').length;
  
  function moveSlide(direction) {
      const slider = document.getElementById('slider');
      currentSlide += direction;
  
      // Loop back to the first slide if we exceed the last slide
      if (currentSlide >= totalSlides) {
          currentSlide = 0;
      }
  
      // Go to the last slide if we're at the first and press "previous"
      if (currentSlide < 0) {
          currentSlide = totalSlides - 1;
      }
  
      // Calculate the translateX value to shift slides
      const translateX = -(currentSlide * 100) + '%';
      slider.style.transform = `translateX(${translateX})`;
  }
  document.addEventListener("DOMContentLoaded", function() {
    const contentBox = document.getElementById('content');
    const imageBox = document.getElementById('image');
 
    // Function to check if the element is in the viewport
    function isInViewport(element) {
        const rect = element.getBoundingClientRect();
        return rect.top >= 0 && rect.bottom <= (window.innerHeight || document.documentElement.clientHeight);
    }
 
    // Add scroll event listener to trigger the animation
    window.addEventListener('scroll', function() {
        if (isInViewport(contentBox)) {
            contentBox.style.animation = 'slideInLeft 3s forwards';
            imageBox.style.animation = 'slideInRight 3s forwards';
        }
    });
 });
 
  
  

