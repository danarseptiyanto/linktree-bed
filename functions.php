<?php

//admin adminbed456

// DB AND QUERY
$conn = mysqli_connect("localhost", "root", "", "bedlinks");
function query($query) {
    global $conn;
    $results = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($results)) {
        $rows[] = $row;
    }
    return $rows;
}

// UPLOAD ICON (LINK)
function uploadIcon() {
    $fileName = $_FILES['icon']['name'];
    $fileTemp = $_FILES['icon']['tmp_name'];
    $typeFile = $_FILES['icon']['type'];
    
    $fileNameBaru = uniqid() . "_" . $fileName;

    if ($typeFile == 'image/jpeg' || $typeFile == 'image/png' || $typeFile == 'image/webp'  || $typeFile == 'image/svg') {
        echo "<script>alert('sukses');</script>";
        move_uploaded_file($fileTemp, '../assets/img/' . $fileNameBaru);
    }
    else {
        echo "<script>alert('yang anda upload bukan gambar!, coba lagi!');</script>";
        exit();
    }

    return $fileNameBaru;

}

// UPLOAD IMAGE (EVENT)
function uploadImg() {
    $fileName = $_FILES['img']['name'];
    $fileTemp = $_FILES['img']['tmp_name'];
    $typeFile = $_FILES['img']['type'];
    
    $fileNameBaru = uniqid() . "_" . $fileName;

    if ($typeFile == 'image/jpeg' || $typeFile == 'image/png' || $typeFile == 'image/webp'  || $typeFile == 'image/svg') {
        echo "<script>alert('sukses');</script>";
        move_uploaded_file($fileTemp, '../assets/img/' . $fileNameBaru);
    }
    else {
        echo "<script>alert('yang anda upload bukan gambar!, coba lagi!');</script>";
        exit();
    }

    return $fileNameBaru;

}

// SHOW NEXT EVENT
function showNextEvent() {
    $NextEvent = query("SELECT * FROM nextevent ORDER BY id DESC LIMIT 4");
    return $NextEvent;
}

// SHOW NEXT EVENT BY ID
function showLEventId($id) {
    $data = query("SELECT * FROM nextevent WHERE id='$id'");
    return $data;
}

// ADD NEXT EVENT
function addEvent($data) {
    global $conn;
    $title = htmlspecialchars($data["title"]);
    $link = htmlspecialchars($data["link"]);
    $date = htmlspecialchars($data["date"]);
    $img = uploadImg(); 

    $query = "INSERT INTO nextevent VALUES ('', '$title', '$link', '$img', '$date')";
    mysqli_query($conn, $query);
    header("Location: index");
}

// DELETE NEXT EVENT
function deleteEvent($id) {
    global $conn;
    $id = mysqli_real_escape_string($conn, $id);
    $query = "DELETE FROM nextevent WHERE id = '$id'";
    mysqli_query($conn, $query);
    header("Location: index");
}

// EDIT NEXT EVENT
function editEvent($data) {
    global $conn;
    $id = $data["id"];
    $title = htmlspecialchars($data["title"]);
    $link = htmlspecialchars($data["link"]);
    $date = htmlspecialchars($data["date"]);

    $imgOld = htmlspecialchars($data["imgOld"]);

    if( $_FILES['img']['error'] === 4 ) {
		$img = $imgOld;
	} else {
		$img = uploadimg();
	}

    $query = "UPDATE nextevent SET title='$title', link='$link', img='$img', date='$date' WHERE id='$id'";
    
    if (mysqli_query($conn, $query)) {
            header("Location: index");
        }
}

// SHOW LINK BY CATEGORY
function showLink($category) {
    $links = query("SELECT * FROM links WHERE category='$category'");
    return $links;
}

// SHOW LINK BY ID
function showLinkAll($id) {
    $data = query("SELECT * FROM links WHERE id='$id'");
    return $data;
}

// ADD LINK
function addLink($data) {
    global $conn;
    $title = htmlspecialchars($data["title"]);
    $link = htmlspecialchars($data["link"]);
    $category = htmlspecialchars($data["category"]);
    $icon = uploadIcon(); 

    $query = "INSERT INTO links VALUES ('', '$title', '$link', '$icon', '$category')";
    mysqli_query($conn, $query);
    header("Location: index");
}

// DELETE LINK
function deleteLink($id) {
    global $conn;
    $id = mysqli_real_escape_string($conn, $id);
    $query = "DELETE FROM links WHERE id = '$id'";
    mysqli_query($conn, $query);
    header("Location: index");
}

// EDIT LINK
function editLink($data) {
    global $conn;
    $id = $data["id"];
    $title = htmlspecialchars($data["title"]);
    $link = htmlspecialchars($data["link"]);
    $category = htmlspecialchars($data["category"]);

    $iconOld = htmlspecialchars($data["iconOld"]);

    if( $_FILES['icon']['error'] === 4 ) {
		$icon = $iconOld;
	} else {
		$icon = uploadIcon();
	}

    $query = "UPDATE links SET title='$title', link='$link', icon='$icon', category='$category' WHERE id='$id'";
    
    if (mysqli_query($conn, $query)) {
            header("Location: index");
        }
}

// LOGIN
function signin($data) {
    global $conn;
    $username = $data["username"];
    $password = $data["password"];

    $checkUsername = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
    
    if (mysqli_num_rows($checkUsername) === 1 ) {
        $row = mysqli_fetch_assoc($checkUsername);
        if (password_verify($password, $row["password"])) {

            $_SESSION["login"] = true;

            header("Location: index.php");
        }
    }
    
    echo "<script>
    alert('Username / Password Salah');
    window.location.replace('signin.php');
    </script>";
    exit();
}

// HAS TO AUTH
function preventOpen() {
    session_start();
    if (!isset($_SESSION["login"])) {
        header("Location: signin");
        exit;
    }
}