function showData() {
    var term = document.getElementById("search").value;
    const endpoint = "/search/" + term;
    const SuggestionList = document.getElementById("list");
    SuggestionList.innerHTML = "";
    console.log(endpoint);
    fetch(endpoint)
        .then((response) => {
            if (!response.ok) {
                throw new Error("HTTP error! Status:", response.status);
            }
            return response.json();
        })
        .then((data) => {
            console.log(data);
            SuggestionList.innerHTML = "";
            data.forEach((student) => {
                const listitem = document.createElement("li");
                listitem.textContent = student.name;
                SuggestionList.appendChild(listitem);
            });
        })
        .catch((error) => {
            console.error("Error", error);
        });
}
