
<?PHP
////////////////////////// PHP INNER JOIN SYNTX///////////////////////////////////////////////////////////////////
////////////////////////INNER JOIN//////////////////////////////////////////////////////////////////////////////////////////////
$sql1 = "SELECT * FROM news inner join max_wallet_history on news.id=max_wallet_history.id";
$res = mysqli_query($conn, $sql1);

///////////////////////////////////////RIGHT INNER JOIN////////////////////////////////////////////////////////////
$sql1 = "SELECT * FROM news right join max_wallet_history on news.id=max_wallet_history.id";
$res = mysqli_query($conn, $sql1);

// ///////////////////////////////LEFT INNER JOIN ////////////////////////////////////////////////////////////////////
$sql1 = "SELECT * FROM news left join max_wallet_history on news.id=max_wallet_history.id";
$res = mysqli_query($conn, $sql1);
 
////////////////////////////////// FULL JOIN //////////////////////////////////////////////////////////////////////////
$sql1 = "SELECT * FROM news left join max_wallet_history on news.id=max_wallet_history.id
UNION
SELECT * FROM news right join max_wallet_history on news.id=max_wallet_history.id";
$res =mysqli_query($conn, $sql1);

?>

