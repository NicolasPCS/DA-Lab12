<%@ Page Title="Home Page" Language="C#" MasterPageFile="~/Site.Master" AutoEventWireup="true" CodeBehind="Default.aspx.cs" Inherits="PartialPageUpdate._Default" %>

<asp:Content ID="BodyContent" ContentPlaceHolderID="MainContent" runat="server">

    <div class="jumbotron">
        
        <asp:ScriptManagerProxy ID="ScriptManagerProxy1" runat="server">
        </asp:ScriptManagerProxy>
        <br />
        <asp:UpdatePanel ID="UpdatePanel1" runat="server">
            <ContentTemplate>
                <asp:Label ID="Label1" runat="server" Text="Label" Width="196px"></asp:Label>
        <br />
                <br />
                <asp:Timer ID="Timer1" runat="server" Interval="1000" OnTick="Page_Load" ValidateRequestMode="Enabled">
                </asp:Timer>
            </ContentTemplate>
        </asp:UpdatePanel>
        <br />
        <asp:Label ID="Label2" runat="server" Text="Label" Width="196px"></asp:Label>
        <br />
        <br />
        
    </div>

</asp:Content>