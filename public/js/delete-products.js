var checkboxes = document.getElementsByClassName("selected-items");
for (let i = 0; i < checkboxes.length; i++)
    checkboxes[i].checked = false;

function deleteProducts() {
    var productsToDelete = document.getElementsByClassName('selected-items');   // get all checkboxes
    var productsId = [];    // contains ids which are to be deleted from database

    // looking for checked checkboxes and pushing their ids into productsId which is going to be sent to the server
        for (let i = 0; i < productsToDelete.length; i++) {
        if (productsToDelete[i].checked == true) {
            productsId.push(productsToDelete[i].id);
        }
    }

    if (productsId.length == 0) return 0;   // if there's nothing to delete


    var str_json = JSON.stringify(productsId);  // it's to be sent to the server in JSON format

    var xhr = new XMLHttpRequest();
    xhr.open("DELETE", "/admin-panel/products", true);
    xhr.setRequestHeader('X-CSRF-TOKEN', document.getElementsByName('csrf-token')[0].getAttribute('content'));
    xhr.send(str_json);

    xhr.onload = function () {
    if (xhr.readyState === xhr.DONE) {
            if (xhr.status === 200) {
                if (xhr.response == "good") // all data were deleted successfuly
                    deleteProductFromPage(productsId);  // since they were deleted from the server, delete 'em from the page too.
            }
        }
    };
}


function deleteProductFromPage(productsId) {

    var checkboxes = document.getElementsByClassName("selected-items");
    var rawsToDelete = [];

    for (let i = 0; i < checkboxes.length; i++) {
        if (checkboxes[i].checked == true) {
            rawsToDelete.push(checkboxes[i].parentNode.parentNode);
        }
    }

    for (let i = 0; i < rawsToDelete.length; i++)
        rawsToDelete[i].remove();

    animatePopUpMessage('good', "<i>The products you've selected have been deleted <b>successfuly</b></i>")

}
