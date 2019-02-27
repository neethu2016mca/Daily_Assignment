<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="registration.aspx.cs" Inherits="demo.registration" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title></title>
    <style type="text/css">
        .auto-style1 {
            width: 100%;
        }
        .auto-style2 {
            height: 23px;
        }
    </style>
</head>
<body style="background-color:orange;">
    <form id="form1" runat="server">
    <div>
    
        <table class="auto-style1">
            <tr>
                
                <td><center>REGISTRATION FORM</center></td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                
                <td>Name</td>
                <td>
                    <asp:TextBox ID="TextBox1" runat="server" Height="21px" Width="164px"></asp:TextBox>
                    <asp:RequiredFieldValidator ID="RequiredFieldValidator1" runat="server" ErrorMessage="This Field is required" ControlToValidate="TextBox1" ForeColor="Red"></asp:RequiredFieldValidator>
                </td>
                    
            </tr>
            <tr>
                <td>Gender</td>
                <td>
                    <asp:RadioButtonList ID="RadioButtonList1" runat="server" RepeatDirection="Horizontal" Height="23px" Width="177px">
                        <asp:ListItem>Male</asp:ListItem>
                        <asp:ListItem>Female</asp:ListItem>
                    </asp:RadioButtonList>
                </td>
            </tr>
            <tr>
                <td>Address</td>
                <td>
                    <asp:TextBox ID="TextBox2" runat="server" TextMode="MultiLine"></asp:TextBox>
                    <asp:RequiredFieldValidator ID="RequiredFieldValidator2" runat="server" ErrorMessage="This field is required" ControlToValidate="TextBox2" ForeColor="Red"></asp:RequiredFieldValidator>
                </td>
            </tr>
            <tr>
                <td class="auto-style2">Course</td>
                <td class="auto-style2">
                    <asp:DropDownList ID="DropDownList1" runat="server" Height="16px" Width="177px">
                        <asp:ListItem>MCA</asp:ListItem>
                        <asp:ListItem>M.Tech</asp:ListItem>
                        <asp:ListItem>B.Tech</asp:ListItem>
                    </asp:DropDownList>
                </td>
            </tr>
            <tr>
                <td>Emailid</td>
                <td>
                    <asp:TextBox ID="TextBox3" runat="server" Height="17px" Width="169px"></asp:TextBox>
                    <asp:RequiredFieldValidator ID="RequiredFieldValidator3" runat="server" ErrorMessage="Must enter valid emailid" ControlToValidate="TextBox3" ForeColor="Red"></asp:RequiredFieldValidator>
                </td>
            </tr>
            <tr>
                <td>Photo</td>
                <td>
                    <asp:FileUpload ID="FileUpload1" runat="server" />
                    <asp:RequiredFieldValidator ID="RequiredFieldValidator5" runat="server" ControlToValidate="FileUpload1" ErrorMessage="PNG or JPEG images only" ForeColor="Red"></asp:RequiredFieldValidator>
                </td>
            </tr>
            <tr>
                <td class="auto-style2">Username</td>
                <td class="auto-style2">
                    <asp:TextBox ID="TextBox4" runat="server" Height="26px" Width="167px"></asp:TextBox>
                    <asp:RequiredFieldValidator ID="RequiredFieldValidator6" runat="server" ControlToValidate="TextBox4" ErrorMessage="No space "></asp:RequiredFieldValidator>
                </td>
            </tr>
            <tr>
                <td>Password</td>
                <td>
                    <asp:TextBox ID="TextBox5" runat="server" Height="25px" Width="165px"></asp:TextBox>
                    <asp:RequiredFieldValidator ID="RequiredFieldValidator4" runat="server" ErrorMessage="Strong password with 8 characters" ViewStateMode="Enabled" ControlToValidate="TextBox5"></asp:RequiredFieldValidator>
                </td>
            </tr>
            <tr>
                <td>Confirm Password</td>
                <td>
                    <asp:TextBox ID="TextBox6" runat="server" Height="25px" Width="163px"></asp:TextBox>
                    <asp:CompareValidator ID="CompareValidator1" runat="server" ControlToValidate="TextBox6" ErrorMessage="Same Password"></asp:CompareValidator>
                </td>
            </tr>
            <tr>
                <td>
                    <asp:CheckBox ID="CheckBox1" runat="server" OnCheckedChanged="CheckBox1_CheckedChanged1" Text="I agree all terms and policies" />
                </td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>
                    <asp:Button ID="Button1" runat="server" Text="Register" />
                </td>
                <td>&nbsp;</td>
            </tr>
        </table>
    
    </div>
    </form>
</body>
</html>
