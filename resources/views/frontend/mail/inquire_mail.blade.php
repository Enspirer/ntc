<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

.field {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</head>
<body align="center" style="background-color: #eee; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #333333;">
    
<br><br>
    <h1 style="font-size: 20px;">NTC - Inquire Details</h1><br>

    <h4>Thank you for your interest in our product. One of our member will get back in touch with you soon!<br>
       Have a great day!
    </h4>
    <br>
    
    <table width="70%" cellpadding="0" cellspacing="0" border="0" align="center">
        
        <tr>            
            <td width="20%" cellpadding="0" cellspacing="0">  
                <p align="left"><b>Product Name:</b> </p>  
                <hr>        
            </td>
            <td  cellpadding="0" cellspacing="0">  
                <p align="left">{{ $details['product_name'] }}</p> 
                <hr>                
            </td>
        </tr>
        <tr>            
            <td width="20%" cellpadding="0" cellspacing="0">  
                <p align="left"><b>Model Number:</b> </p>  
                <hr>        
            </td>
            <td  cellpadding="0" cellspacing="0">  
                <p align="left">{{ $details['product_id'] }}</p> 
                <hr>                
            </td>
        </tr>
        <tr>            
            <td width="20%" cellpadding="0" cellspacing="0">  
                <p align="left"><b>First Name:</b> </p>  
                <hr>        
            </td>
            <td  cellpadding="0" cellspacing="0">  
                <p align="left">{{ $details['first_name'] }}</p> 
                <hr>                
            </td>
        </tr>
        @if($details['last_name'] != null)
            <tr>            
                <td width="20%" cellpadding="0" cellspacing="0">  
                    <p align="left"><b>Last Name:</b> </p>  
                    <hr>        
                </td>
                <td  cellpadding="0" cellspacing="0">  
                    <p align="left">{{ $details['last_name'] }}</p> 
                    <hr>                
                </td>
            </tr>  
        @endif      
        <tr>            
            <td width="20%" cellpadding="0" cellspacing="0">  
                <p align="left"><b>Contact Number:</b> </p>  
                <hr>        
            </td>
            <td  cellpadding="0" cellspacing="0">  
                <p align="left">{{ $details['contact_number'] }}</p> 
                <hr>                
            </td>
        </tr>
        @if($details['email'] != null)
            <tr>            
                <td width="20%" cellpadding="0" cellspacing="0">  
                    <p align="left"><b>Email:</b> </p>  
                    <hr>        
                </td>
                <td  cellpadding="0" cellspacing="0">  
                    <p align="left">{{ $details['email'] }}</p> 
                    <hr>                
                </td>
            </tr>
        @endif      
        @if($details['message'] != null)
        <tr>            
            <td width="20%" cellpadding="0" cellspacing="0">
                <p align="left"><b>Message:</b> </p>
            </td>
            <td  cellpadding="0" cellspacing="0">     
                <p align="left">{{ $details['message'] }}</p>          
            </td>
        </tr>
        @endif
    </table>
    <br><br>
</body>
</html>
