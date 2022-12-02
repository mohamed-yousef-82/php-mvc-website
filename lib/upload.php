<?PHP
namespace project\lib;
use project\lib\InputFilter;
class upload 
{
    use InputFilter;
    public $filesrc;
    public function __construct() 
        {
            $src = "upload/";
            $file=$_FILES["file"]["name"];
            $ext = pathinfo($file, PATHINFO_EXTENSION);
            $file = "file_".time().rand(5, 15).".".$ext;
            $tmp_file=$_FILES["file"]["tmp_name"];
            $file_src=$src.$file;
            $allow_extension = array("jpeg","jpg","gif","png","pdf","pptx");
            $file_ext = explode(".",$file);
            $file_extension = strtolower(end($file_ext));
            if (isset($_FILES["file"])){
            if (!empty($_FILES["file"]) && !empty($_FILES["file"]["tmp_name"])){
            if (in_array($file_extension,$allow_extension)){
            $this->filesrc = $this->filterString($file_src);
            move_uploaded_file($tmp_file,$file_src);
            }else{
                $_SESSION['message'] = 'File Extension Not Allowed';
            }
            }else{
                $this->filesrc =$this->filterString($_POST["oldfile"]);
            }
            }
        }
}
