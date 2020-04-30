Public Class Form1
    Private Sub Form1_Load(sender As Object, e As EventArgs) Handles MyBase.Load

    End Sub

    Private Sub btnToevoegen_Click(sender As Object, e As EventArgs) Handles btnToevoegen.Click
        Dim x As New MYSQLGenerator.MySqlGenerator("localhost", "root", "usbw", "project3", "3307")

        Dim y As String
        Dim z As Integer

        y = txtnaam.Text
        z = txtCode.Text

        x.Query("insert into klant(naam , code) values ( ?, ?)", New List(Of Object)({y, z}))

    End Sub
End Class
