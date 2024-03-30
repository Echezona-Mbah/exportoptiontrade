
document.addEventListener('DOMContentLoaded', async () => {
    const userDetailsContainer = document.getElementById('display-mail');
    
    // Replace 'userId' with the actual ID of the user you want to fetch
    const userId = sessionStorage.getItem('userId');
  
    try {
      // Fetch user details from the backend API
      const response = await fetch(`http://localhost:8800/users/${userId}`);
      if (!response.ok) {
        throw new Error('Failed to fetch user details');
      }
      
      const user = await response.json();
  
      console.log(user);
      // Display user details on the webpage
      userDetailsContainer.innerHTML = `
       ${user.email} 
      `;

    console.log(userId);
    } catch (error) {
      console.error('Error fetching user details:', error);
    //   userDetailsContainer.innerHTML = '<p>Error fetching user details. Please try again later.</p>';
    }
  });