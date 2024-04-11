// Function to get Viettel Post Token
const getViettelPostToken = () => {
    const tokenElement = document.getElementById('token');
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;
    
    // AJAX request to login to Viettel Post and get token
    const xhr = new XMLHttpRequest();
    xhr.open("POST", "https://partner.viettelpost.vn/v2/user/Login", true);
    xhr.setRequestHeader("Content-Type", "application/json");

    const data = JSON.stringify({ "USERNAME": username, "PASSWORD": password });

    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            const response = JSON.parse(xhr.responseText);
            const token = response.token; // Assuming the token is in the response
            tokenElement.textContent = "Token: " + token;
        } else if (xhr.readyState === 4) {
            tokenElement.textContent = "Error fetching token";
        }
    };

    xhr.send(data);
};
