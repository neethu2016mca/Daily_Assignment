<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="login.aspx.cs" Inherits="demo.login" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title></title>
    <style type="text/css">
        .auto-style1 {
            width: 100%;
        }
        .auto-style2 {
            height: 26px;
        }
        .auto-style3 {
            height: 26px;
            width: 73px;
        }
        .auto-style4 {
            width: 73px;
        }
    </style>
</head>
<body>
    <form id="form1" runat="server">
        <table class="auto-style1">
            <tr>
                <td colspan="2">
                
                    <center style="width: 947px">
                        <asp:Label ID="Label4" runat="server" Text="LOGIN FORM"></asp:Label>
                
                
                </center>
                </td>
                
            </tr>
            <tr>
                <td class="auto-style3">
                    <asp:Label ID="Label2" runat="server" Text="Username"></asp:Label>
                &nbsp;&nbsp;&nbsp;
                </td>
                <td class="auto-style2">
                    <asp:TextBox ID="TextBox1" runat="server" style="margin-left: 48px"></asp:TextBox>
                </td>
            </tr>
            <tr>
                <td class="auto-style4">
                    <asp:Label ID="Label3" runat="server" Text="Password"></asp:Label>
                </td>
                <td>
                    <asp:TextBox ID="TextBox2" runat="server" style="margin-left: 48px"></asp:TextBox>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                
                    <asp:Button ID="Button1" runat="server" OnClick="Button1_Click" Text="Login" Width="66px" />
                </td>
                <td>&nbsp;</td>
            </tr>
        </table>
    <div>
    
    </div>
    </form>
</body>
</html>
