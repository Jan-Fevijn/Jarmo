Imports MySql.Data.Resources
Imports System.Data
Imports MySql.Data
Imports MySql.Data.MySqlClient
Imports System.Configuration
Imports System.IO


Public Class inloggen
    Public conn As MySqlConnection






    Private Sub inloggen_Load(sender As Object, e As EventArgs) Handles MyBase.Load






    End Sub

    Private Sub TextBox1_TextChanged(sender As Object, e As EventArgs) Handles txtgb.TextChanged

    End Sub

    Private Sub Button1_Click(sender As Object, e As EventArgs) Handles Button1.Click
        Dim connection As New MySqlConnection("datasource=localhost;port=3307;username=root;password=usbw;database=project1")


        Dim command As New MySqlCommand("SELECT `gebruikersnaam`, `wachtwoord` FROM `persoon` WHERE `gebruikersnaam` = @username AND `wachtwoord` = @password", connection)

        command.Parameters.Add("@username", MySqlDbType.VarChar).Value = txtgb.Text
        command.Parameters.Add("@password", MySqlDbType.VarChar).Value = txtww.Text

        Dim adapter As New MySqlDataAdapter(command)
        Dim table As New DataTable()

        adapter.Fill(table)

        If table.Rows.Count = 0 Then

            MessageBox.Show("Invalid Username Or Password")

        Else

            MessageBox.Show("Logged In")


            startpag.Show()
            Me.Hide()

        End If
    End Sub
End Class
